# REST API v1 Resources

###Shoes
Shoes are foot coverings that people own. Running shoes are such that should be replaced after a certain number of miles. People have one or many pairs of such shoes. Here, they can keep track of miles on the shoes.

| Resource            | Description                                                                              |
| ------------------- | -----------                                                                              |
| GET shoes/user/:id  | Returns a collection of the authenticated user's shoes specified by the id parameter.    |
| GET shoes/:id       | Returns a single shoe, specified by the id parameter.                                    |
| POST shoes/         | Creates a new shoe for the authenticated user.                                           |
| PUT shoes/:id       | Updates the authenticated user's shoe details, specified by the id parameter.            |
| DELETE shoes/:id    | Deletes a shoe in the the authenticated user's inventory, specified by the id parameter. |


