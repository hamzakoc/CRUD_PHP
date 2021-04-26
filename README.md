# Pages:
## 1. Public Area
  a. Everyone (visitor, admin) can access the public area
    i. View items
    ii. View items by category
    iii. View item by search (Filed to search time title and description)
  b. Pages:
    i. Login
     • The administrator can log in to the back-end (Dashboard) with correct credentials.
    ii. home page
      • Show five items (all fields). Challenge - let admin select and mark an item to be shown on the home page
    iii. item page
      • Show list of categories
      • Clicking on each category lists the items in the selected category
   iv. Search
     • A simple search to search for a keyword – Challenge search for multiple keywords (e.g., Toronto honda) and show the most relevant result first. (search filed: title and description)
## 2. Private Area (administrator) * Password protected area – Username and hashed password must be stored in a file outside public_html.
    a. Manage categories
   i. Add new category




# Fields:
## 1. Category Fields: A category must have the following fields: * All fields are mandatory
  a) Category id (Application must provide the id)
  b) * Category name (max length 60)
  c) * Category Description (max length 100)
  2. Item Fields: An item must have the following fields: * All fields are mandatory
  a) Item id (Application must provide the id)
  b) * Item title (max length 100)
  c) * Item description (max length 255)
  d) * Price (if entered it must be digits – whole number – item is free if the value is zero)
  e) Picture (for items with not picture show the default picture – check resources section)

# Operations:
The administrator must be able to perform the following functions:
1. List item (show title, description, category, price, picture and modify and delete option in a table)
2. Edit any item from the list by clicking on the item, which will take them to an edit page.
3. Delete any item from the list by clicking on a button or link. (use JavaScript to confirm the deletion)
4. Search for an item by title and description
5. Create a new item.
6. List category (show title, description, number of items, and modify option)
7. Modify a category
8. Add a new category
