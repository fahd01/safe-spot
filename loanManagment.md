# Loan Management
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

### Loan Rating
The loan interest rate is determined by the system based on the borrower rating and base market interest.  
The interest rate is determined by the system is not binding for bidders:  
then the bidder can set a different interest for his bid.  
The interest rate is determined by the system  serves as a recommendation to help bidders avoid risk, or make the riskier loans more rewarding:
the lower the borrower rating, the riskier the loan, the higher the interest

### Extra suggested features
#### Automatic bidding: 
- set up rules for automatic bidding: user rate, loan interest, bidding amount
- subscribes to `loanPersisted` doctrine event, if loan confirms rules, create bidding
- Notify bidder about automated bid by email
#### Custom Paying Period
When creating a loan, the user can choose the instalment payments period: monthly or custom (per 1, 2 or 3 months)
and installments gets calculated accordingly.  
This feature can be enabled by rating, maybe.

### Constraints:
- User can have one active loan at a time
- User can have one bidding per loan
- [x] User can delete his loans when they are still in `IN_BIDDING` status only
  - Subsequent bids (including approved ones) are deleted as well
    - notify
- User can edit his loans when they are still in `IN_BIDDING` status only
  - editing a loan should reset all accepted bids to `PENDING`
- [x] User can not bid on his own loan
- [x] User can edit his bid, only if it is in `PENDING`
- [x] User can delete his bid, only if it is in `PENDING` or `REJECTED`
- [x] add data-bs-toggle="tooltip" data-bs-placement="bottom" to remaining titles
- [x] user can not ap$rove `PENDING` bids when loan is `ACTIVE` (but can still reject them)

- [x] loan details in automated bid email

- [x] display number of bids placed and bids approved for every automation
  - [ ] style the automation accordingly
  - [ ] user stats (loans, bids, automations) ???

- last accepted bid, if it exceeds needed amount:
  - [x] trim last bids amount to match needed amount
  - [ ] notify bidder that his bid was trimmed
  - [ ] add checkbox on placed bid to allow trimming your bid to match remaining amount 

- [ ] report page with pdf integration https://github.com/KnpLabs/KnpSnappyBundle
  - displays returns from all you bids
  - download pdf for tax
- pagination 
  - [x] frontend: https://datatables.net/examples/styling/bootstrap5.html
  - [ ] backend ?


### Missing (Installments and Borrower Rating)
- Once the loan changes to `ACTIVE`
  - installment amount should be calculated
  - Set start date
  - set involved bids to `ACTIVE`
- Make payment period possibilities depend on amount
- To calculate active loan progress, paid installments should be persisted
- Due installments
- Add remaining amount attribute in loan ???
- Add Rating 1--1 with Loan
  - contains info about the payment process to justify the grade