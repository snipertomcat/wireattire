# Namespace App\Store

This namespace is where the logic for internal store operations will reside. 

Functionality provided in this namespace:

### Redis operations
    - Redis will be used to store:
        - Product selections to the cart
        - Package and subscription data
        - Metadata regarding packages, subscriptions & items
### Clients & Consumers
    - Clients are specific to the standard operations of the store itself
    - These are classes that will consume and interact with model objects directly:
        - Cart
        - Product
        - Category
        - Subscriptions
        - Packages
    - Consumers will utilize relevant repositories to handle database transactions

### Session Layer
    - Intermediate layer between the session that will hold details about orders and other meta data