# RECRUITMENT TEST / RADITHYA IHZA WIBOWO

# API Documentation

## User API

### 1. Create User

**Endpoint:** `/api/user`

**Method:** POST

**Request Body:**

```json
{
    "name": "John Doe",
    "email": "john.doe@example.com",
    "password": "securepassword"
}
```

**Response:**

```json
{
    "success": true,
    "message": "Successed insert user data!",
    "data": {
        "id": 1,
        "name": "John Doe",
        "email": "john.doe@example.com",
        "created_at": "2024-12-12T10:00:00Z"
    }
}
```

### 2. Retrieve All Users

**Endpoint:** `/api/user`

**Method:** GET

**Response:**

```json
{
    "success": true,
    "data": [
        {
            "id": 1,
            "name": "John Doe",
            "email": "john.doe@example.com",
            "created_at": "2024-12-12T10:00:00Z"
        }
    ]
}
```

### 3. Retrieve User by ID

**Endpoint:** `/api/users/{id}`

**Method:** GET

**Response:**

```json
{
    "success": true,
    "data": {
        "id": 1,
        "name": "John Doe",
        "email": "john.doe@example.com",
        "created_at": "2024-12-12T10:00:00Z"
    }
}
```

### 4. Update User

**Endpoint:** `/api/users/{id}`

**Method:** POST

**Request Body:**

```json
{
    "name": "John Smith",
    "email": "john.smith@example.com",
    "password": "john.smith.edit",
    "_method": "PUT"
}
```

**Response:**

```json
{
    "success": true,
    "message": "Successed update user data!",
    "data": {
        "id": 1,
        "name": "John Smith",
        "email": "john.smith@example.com",
        "updated_at": "2024-12-12T11:00:00Z"
    }
}
```

### 5. Delete User

**Endpoint:** `/api/users/{id}`

**Method:** DELETE

**Response:**

```json
{
    "success": true,
    "message": "User deleted successfully!"
}
```

## Movies API

### 1. Retrieve All Movies

**Endpoint:** `/api/movies`

**Method:** GET

**Response:**

```json
{
    "success": true,
    "data": [
        {
            "id": 1,
            "title": "Dune",
            "overview": "A mythic and emotionally charged hero's journey.",
            "release_date": "2024-12-12",
            "created_at": "2024-12-12T10:00:00Z"
        }
    ]
}
```

### 2. Retrieve Movie by ID

**Endpoint:** `/api/movies/{id}`

**Method:** GET

**Response:**

```json
{
    "success": true,
    "data": {
        "id": 1,
        "title": "Dune",
        "overview": "A mythic and emotionally charged hero's journey.",
        "release_date": "2024-12-12",
        "created_at": "2024-12-12T10:00:00Z"
    }
}
```

## Watch List API

### 1. Create Watch List

**Endpoint:** `/api/watch-lists`

**Method:** POST

**Request Body:**

```json
{
    "user_id": 1,
    "movies": "1, 2, 3",
    "note": "My favorite movies"
}
```

**Response:**

```json
{
    "success": true,
    "message": "Successed add watch list!",
    "data": {
        "user_id": "2",
        "movies": "1, 2, 3, 4",
        "note": "test 123",
        "updated_at": "2024-12-11T18:47:49.000000Z",
        "created_at": "2024-12-11T18:47:49.000000Z",
        "id": 3
    }
}
```

### 2. Retrieve All Watch Lists

**Endpoint:** `/api/watch-lists`

**Method:** GET

**Response:**

```json
{
    "success": true,
    "message": "List Data Posts",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 3,
                "user_id": 2,
                "movies": "1, 2, 3, 4",
                "note": "test 123",
                "created_at": "2024-12-11T18:47:49.000000Z",
                "updated_at": "2024-12-11T18:47:49.000000Z"
            },
            {
                "id": 2,
                "user_id": 1,
                "movies": "1, 2, 3, 4",
                "note": "test 123",
                "created_at": "2024-12-11T18:47:38.000000Z",
                "updated_at": "2024-12-11T18:47:38.000000Z"
            }
        ],
        "first_page_url": "http://localhost:8000/api/watch-list?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://localhost:8000/api/watch-list?page=1",
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://localhost:8000/api/watch-list?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "next_page_url": null,
        "path": "http://localhost:8000/api/watch-list",
        "per_page": 5,
        "prev_page_url": null,
        "to": 2,
        "total": 2
    }
}
```

### 3. Retrieve Watch List by ID

**Endpoint:** `/api/watch-lists/{id}`

**Method:** GET

**Response:**

```json
{
    "success": true,
    "message": "Detail data watch list!",
    "data": {
        "id": 2,
        "user_id": 1,
        "movies": [
            {
                "id": 1,
                "title": "Dune: Part Two",
                "overview": "The continuation of Paul Atreides' journey, navigating political intrigue and war on the desert planet of Arrakis.",
                "release_date": "2024-03-15",
                "created_at": "2024-12-11T18:45:38.000000Z",
                "updated_at": null
            },
            {
                "id": 2,
                "title": "The Hunger Games: The Ballad of Songbirds and Snakes",
                "overview": "A prequel exploring the origins of the Hunger Games through the story of Coriolanus Snow.",
                "release_date": "2024-02-16",
                "created_at": "2024-12-11T18:45:38.000000Z",
                "updated_at": null
            },
            {
                "id": 3,
                "title": "Mission: Impossible - Dead Reckoning Part Two",
                "overview": "Ethan Hunt and his team continue their battle against global threats in this high-octane spy thriller.",
                "release_date": "2024-07-28",
                "created_at": "2024-12-11T18:45:38.000000Z",
                "updated_at": null
            },
            {
                "id": 4,
                "title": "Spider-Man: Beyond the Spider-Verse",
                "overview": "Miles Morales' multiverse-spanning adventure continues with new challenges and allies.",
                "release_date": "2024-03-29",
                "created_at": "2024-12-11T18:45:38.000000Z",
                "updated_at": null
            }
        ],
        "note": "test 123",
        "created_at": "2024-12-11T18:47:38.000000Z",
        "updated_at": "2024-12-11T18:47:38.000000Z"
    }
}
```

### 4. Update Watch List

**Endpoint:** `/api/watch-lists/{id}`

**Method:** PUT

**Request Body:**

```json
{
    "note": "Updated favorite movies",
    "_method": "PUT"
}
```

**Response:**

```json
{
    "success": true,
    "message": "Successed update watch list!",
    "data": {
        "id": 1,
        "user_id": 1,
        "movies": "1, 2, 3, 4",
        "note": "test 123 edit",
        "created_at": "2024-12-11T17:13:17.000000Z",
        "updated_at": "2024-12-11T17:41:34.000000Z"
    }
}
```

### 5. Delete Watch List

**Endpoint:** `/api/watch-lists/{id}`

**Method:** DELETE

**Response:**

```json
{
    "success": true,
    "message": "Successed delete watch list!",
    "data": null
}
```

## RAW QUERY

### 1. How many user register per monthly

SELECT
YEAR(created_at) AS year,
MONTH(created_at) AS month,
COUNT(\*) AS total_users
FROM users
GROUP BY YEAR(created_at), MONTH(created_at);

### 2. Show Average watch list added per daily per user

SELECT
DATE(created_at) AS date,
user_id,
COUNT(\*) / COUNT(DISTINCT user_id) AS avg_watchlist_per_user
FROM watch_lists
GROUP BY DATE(created_at);

### 3. Show list user data (id, name) + the total number of watch lists added by each user

SELECT
users.id AS user_id,
users.name AS user_name,
COUNT(watch_lists.id) AS total_watch_lists
FROM
users
LEFT JOIN
watch_lists ON users.id = watch_lists.user_id
GROUP BY
users.id, users.name;

### 4. Show monthly rank movies that added to the watch list by the count

SELECT
MONTH(wl.created_at) AS month,
m.id AS movie_id,
m.title AS movie_title,
COUNT(m.id) AS total_count
FROM
watch_lists wl
JOIN
movies m
ON
FIND_IN_SET(m.id, REPLACE(wl.movies, ' ', '')) > 0
GROUP BY
month, m.id
ORDER BY
month, total_count DESC;
