<?php

namespace App\Livewire;

use App\Models\User;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Livewire\Component;

class UsersList extends Component implements HasTable, HasForms
{
    use InteractsWithTable;
    use InteractsWithForms;

    public function table(Table $table): Table
    {
        return $table
            ->query(User::query())
            ->columns([
                TextColumn::make('id')->label('ID'),
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('email'),
            ])
            ->filters([
                SelectFilter::make('created_at')
                    ->multiple()
                    ->options([
                        'draft' => 'Draft',
                        'reviewing' => 'Reviewing',
                        'published' => 'Published',
                    ]),
                Filter::make('is_admin')
                    ->label('Administrators only?')
                    ->indicator('Administrators')
            ])
            ->actions([
                // ...
            ])
            ->bulkActions([
                // ...
            ])->paginated();
    }
    public function render()
    {
        return view('livewire.users-list');
    }
}
