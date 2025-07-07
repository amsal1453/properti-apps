<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationLabel = 'Artikel';

    protected static ?string $modelLabel = 'Artikel';

    protected static ?string $pluralModelLabel = 'Artikel';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->maxLength(255)
                ->live(onBlur: true)
                ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                    if ($operation === 'create') {
                        $set('slug', Str::slug($state));
                    }
                })
                    ->columnSpanFull(),
            Forms\Components\TextInput::make('slug')
                    ->required()
                ->maxLength(255)
                ->unique(Article::class, 'slug', ignoreRecord: true)
                    ->columnSpanFull(),
            Forms\Components\Select::make('kategori')
                ->required()
                ->options([
                    'berita' => 'Berita',
                    'artikel' => 'Artikel',
                    'pengumuman' => 'Pengumuman',
                ]),
            Forms\Components\DatePicker::make('tanggal_posting')
                    ->required()
                    ->default(now()),
                Forms\Components\Select::make('admin_id')
                ->relationship('admin', 'name')
                    ->required()
                    ->label('Penulis'),
            Forms\Components\FileUpload::make('gambar')
                ->image()
                ->directory('artikel-images')
                ->columnSpanFull(),
            Forms\Components\RichEditor::make('konten')
                ->required()
                ->columnSpanFull(),
            Forms\Components\Textarea::make('excerpt')
                ->rows(3)
                ->helperText('Ringkasan singkat artikel. Jika dikosongkan akan otomatis diambil dari konten.')
                ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->persistFiltersInSession()
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->searchable()
                ->sortable()
                ->limit(50),
            Tables\Columns\TextColumn::make('kategori')
                ->searchable()
                ->sortable()
                ->badge()
                ->color(fn(string $state): string => match ($state) {
                    'berita' => 'info',
                    'artikel' => 'success',
                    'pengumuman' => 'warning',
                    default => 'gray',
                }),
            Tables\Columns\ImageColumn::make('gambar')
                ->circular(),
            Tables\Columns\TextColumn::make('admin.name')
                    ->label('Penulis')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_posting')
                ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
            Tables\Filters\SelectFilter::make('kategori')
                ->options([
                    'berita' => 'Berita',
                    'artikel' => 'Artikel',
                    'pengumuman' => 'Pengumuman',
                ]),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
