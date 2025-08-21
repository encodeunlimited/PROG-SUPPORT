<?php
//refresh

public $listeners = ['table-refresh' => '$refresh'];

//action

public function actions(Loan $row): array
    {
        return [
            // Edit Button
            Button::add('edit')
                ->slot('Edit')
                ->id()
                ->class('px-4 py-2 text-sm rounded-md bg-zinc-700 text-white hover:bg-zinc-600 shadow-md')
                ->dispatch('loan-edit', ['loanId' => $row->id]),

            // View Button
            Button::add('view')
                ->slot('View')
                ->id()
                ->class('px-4 py-2 text-sm rounded-md bg-white text-zinc-900 hover:bg-zinc-200 shadow-md')
                ->dispatch('loan-view', ['loanId' => $row->id]),

            // Delete Button
            Button::add('delete')
                ->slot('Delete')
                ->id()
                ->class('px-4 py-2 text-sm rounded-md bg-red-600 text-white hover:bg-red-700 shadow-md')
                ->dispatch('loan-delete', ['loanId' => $row->id]),
        ];
    }

    //action on volt
    #[On('loan-edit')]
    public function loadLoanData($loanId): void
    {
        // Find the loan by ID and fill the public properties
        $this->loan = Loan::findOrFail($loanId);

        $this->loan_name = $this->loan->loan_name;
        $this->amount = $this->loan->amount;
        $this->interest_rate = $this->loan->interest_rate;
        $this->duration = $this->loan->duration;
        $this->ins_amount = $this->loan->ins_amount;

        // Dispatch a client-side event to open the modal
        Flux::modal('loan-edit')->show();
    }

    //delete volt
    #[On('loan-delete')]
    public function confirmDelete($loanId): void
    {
        $this->loanId = $loanId;
        Flux::modal('delete-loan')->show();
    }

