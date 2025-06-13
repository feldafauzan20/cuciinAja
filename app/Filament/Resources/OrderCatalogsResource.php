<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderCatalogsResource\Pages;
use App\Filament\Resources\OrderCatalogsResource\RelationManagers;
use App\Models\OrderCatalogs;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderCatalogsResource extends Resource
{
    protected static ?string $model = OrderCatalogs::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->label('Nama Pemesan'),
                Tables\Columns\TextColumn::make('notelp')->label('Nomor Telepon'),
                Tables\Columns\TextColumn::make('nama_bank_pembayaran')->label('Bank Pembayaran'),
                Tables\Columns\TextColumn::make('status')->label('Status')->badge()->color(fn($state) => match($state) {
                    'pending' => 'warning',
                    'approved' => 'success',
                    'rejected' => 'danger',
                    default => 'secondary',
                }),
            ])
            ->actions([
                Tables\Actions\Action::make('approve')
                    ->label('Approve')
                    ->color('success')
                    ->visible(fn($record) => $record->status === 'pending')
                    ->action(fn($record) => $record->update(['status' => 'approved'])),
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
            'index' => Pages\ListOrderCatalogs::route('/'),
            'create' => Pages\CreateOrderCatalogs::route('/create'),
            'edit' => Pages\EditOrderCatalogs::route('/{record}/edit'),
        ];
    }
}