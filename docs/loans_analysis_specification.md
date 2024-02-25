# Loans Management
> Fahd Elgayed

## Class Diagram
User(id) 1--* Loan(id, amount, description, purpose, interest, term(payment duration in months), userId(borrower)) 1--* LoanBidding(id, loadId, amount, suggestedInterest, userId(lender)) *--1 User



### Loan Lifecycle
Loan can have one of the following statuses:  
`IN_BIDDING`, `ACTIVE`, `PAID`  
  
Once a user creates a loan, it is in `IN_BIDDING` status where other users (lenders)
can bid: a bid is a participation in a loan where the owner of the bid lends the borrower
a fraction of the loan.  
The loan creator chooses the bids they suit him, once the whole loan amount is covered by ine or more
bids, the loan status changes to `ACTIVE` and the user has to pay monthly.  
Once the loan is fully paid the loan status becomes `PAID`.

### Bid Lifecycle
Loan bid can have one of the following statuses:  
`PENDING`, `APPROVED` | `REJECTED`, `ACTIVE`, `PAID`
Once bid is created it is in `PENDING` status.  
Then the borrower either `APPROVED` or `REJECTED`.  
Once the loan is `ACTIVE`, all chosen bids are set to `ACTIVE` as well.  
Once the loan is `PAID`, all chosen bids are set to `PAID` as well.

### Constraints:
- User can have one active loan at a time
- User can have one bidding per loan
- User can delete his loans when they are still in `IN_BIDDING` status only
- User can edit his loans when they are still in `IN_BIDDING` status only
  - editing a loan should reset all accepted bids to `PENDING`

### Loan Rating
The loan interest rate is determined by the system based on the borrower rating and base market interest.  
The interest rate is determined by the system is not binding for bidders:  
then the bidder can set a different interest for his bid.  
The interest rate is determined by the system  serves as a recommendation to help bidders avoid risk, or make the riskier loans more rewarding:
the lower the borrower rating, the riskier the loan, the higher the interest

### Extra suggested features
#### Automatic bidding:
- set up rules for automatic bidding: user rate, loan interest, bidding amount
- subscribes to `loanCreatedEvent`, if loan confirms rules, create LoanBidding
#### Custom Paying Period
When creating a loan, the user can choose the instalment payments period: monthly or custom (per 1, 2 or 3 months)
and installments gets calculated accordingly.  
This feature can be enabled by rating, maybe.

### Technical Notes
- `DECIMAL` MySQL type should be used for `amount`.  
- Every time a bid is `APROVED`, check missing amount, if all amount is covered change the loan to `ACTIVE`
  - Last bid can be partially approved only take the missing amount to cover the loan
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