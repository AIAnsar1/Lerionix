<?php

namespace App\Filament\Resources;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\ReviewsResource\{Pages,RelationManagers};
use App\Models\Review;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\{Builder, SoftDeletingScope};

class ReviewsResource extends Resource
{
    protected static ?string $model = Review::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->maxLength(255)->required(),
                FileUpload::make('photo')->disk('public')->directory('uploads/teams/photos')->image()->imageEditor()->maxSize(1024)->required(),
                TextInput::make('company_title')->maxLength(255)->required(),
                Select::make('ratings')->options([
                    '1' => '1 звезда',
                    '2' => '2 звезды',
                    '3' => '3 звезды',
                    '4' => '4 звезды',
                    '5' => '5 звезд',
                ])->required()->searchable()->native(false),
                TextInput::make('description')->maxLength(255)->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->searchable(),
                TextColumn::make('title')->sortable()->searchable(),
                ImageColumn::make('photo')->disk('public')->defaultImageUrl('uploads/teams/photos')->size(70)->circular()->sortable()->searchable(),
                TextColumn::make('company_title')->sortable()->searchable(),
                TextColumn::make('ratings')
                    ->label('Ratings')
                    ->formatStateUsing(fn ($state) =>
                    $state
                        ? str_repeat('⭐', (int)$state)
                        : 'No Ratings Available'
                    )
                    ->html(),
                TextColumn::make('description')->sortable()->searchable(),
                TextColumn::make('created_at')->dateTime(),
                TextColumn::make('updated_at')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReviews::route('/create'),
            'edit' => Pages\EditReviews::route('/{record}/edit'),
        ];
    }
}
