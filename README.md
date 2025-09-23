# TinyPal Backend API

A Laravel-based backend API service for the TinyPal React Native application.

## Project Setup

### Requirements
- PHP 8.1+
- Composer
- Laravel 10.x

### Installation

1. Clone the repository
```bash
git clone https://github.com/macdeveloper9401-coder/tinypal-backend.git
cd tinypal-backendapi
```

2. Install dependencies
```bash
composer install
```

3. Configure environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Configure database in `.env` file
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tinypal
DB_USERNAME=root
DB_PASSWORD=
```

5. Start the development server
```bash
php artisan serve --host=0.0.0.0
```
Note: Using `0.0.0.0` allows access from other devices on the network using your system IP address.

## API Endpoints

### 1. Did You Know API
**Endpoint:** `/api/doYouKnow`  
**Method:** GET  
**Description:** Provides educational facts about children's eating habits.  
**Response Format:**
```json
{
  "status": true,
  "text": [
    {
      "id": 1,
      "text1": "Eating with distractions",
      "text2": "Higher rates of healthy food refusal",
      "answer": "One study found that kids were twice as likely to become picky eaters when they ate with distractions"
    }
  ]
}
```

### 2. Flashcard API
**Endpoint:** `/api/flashcard`  
**Method:** GET  
**Description:** Provides flashcard content for educational purposes.  
**Response Format:**
```json
{
  "status": true,
  "flashcards": [
    {
      "id": 1,
      "question": "What Qualifies as Distractions?",
      "answer": "Toys and screens? Obvious distractions. But so are: \n- \"Open your mouth! Here comes an aeroplane wooooo!!\" \n- \"Look there's a bird!\", as the bite goes in <child name>'s mouth. \n- \"I'm closing my eyes. Let me see who comes to take a bite: you or the cat!\""
    }
  ]
}
```

## Integration with React Native

To connect your React Native app to this API:

1. Use your system's IP address instead of localhost
2. Example API call:
```javascript
fetch('http://YOUR_IP_ADDRESS:8000/api/didyouknow')
  .then(response => response.json())
  .then(data => console.log(data));
```

## Current Implementation

The API currently uses static data for demonstration purposes. Future implementations will include database integration for dynamic content management.