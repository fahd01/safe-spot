# loan managment
## entities
* loan entity
    * id:int
    * type: //TODO
    * amount:decimal
    * interest:decimal
    * term:int
    * purpose:string
    * status:string 
    * startDate:date //TODO
    * borrower:userId //TODO(add loans property to user if needed)
* bid entity
    * id:int
    * amount:decimal
    * bidder:userId
    * loan:loanId
    * interest:decimal //TODO (maybe added later)
    * status:string
### our navigation entries:
* all loans
* my loans
* my bids
* submit loan

### Loan Lifecycle
Loan can have one of the following statuses:  
`IN_BIDDING`, `ACTIVE`, `PAID`

Once a user creates a loan, it is in `IN_BIDDING` status where other users (lenders)
can bid: a bid is a participation in a loan where the owner of the bid lends the borrower
a fraction of the loan.  
The loan creator chooses the bids they suit him, once the whole loan amount is covered by ine or more
bids, the loan status changes to `ACTIVE` and the user has to pay monthly.  
Once the loan is fully paid the loan status becomes `PAID`
### Bid Lifecycle
Loan bid can have one of the following statuses:  
`PENDING`, `APPROVED` | `REJECTED`, `ACTIVE`, `PAID`
Once bid is created it is in `PENDING` status.  
Then the borrower either `APPROVED` or `REJECTED`.  
Once the loan is `ACTIVE`, all chosen bids are set to `ACTIVE` as well.  
Once the loan is `PAID`, all chosen bids are set to `PAID` as well.
 
