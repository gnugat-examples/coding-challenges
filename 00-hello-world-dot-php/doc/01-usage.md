# Usage

To run the application, use:

```console
make php c='bin/script.php'
```

## Dev / Test

When developing and testing, the following commands can be useful:

```console
# Prints a helpful message showing the different tasks
make

# Runs CS, Static Analysis and testsuite
make qa

# Prints what Behaviour the Specifications Describe
make test c='--testdox'

# Recreates the autoloader map, adding newly created classes to it
make composer c='dump --optimize'
```

## What's next?

Have a look at [Overview Explanations](./02-overview.md).
