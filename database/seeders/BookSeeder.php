<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    public function run()
    {
        // Use Faker with the 'en_IN' locale for Indian names
        $faker = Faker::create('en_IN'); // Use Indian locale

        // Define a set of common Indian book titles
        $indianBookTitles = [
            "The Heart of India",
            "Journey Through the Ganges",
            "Stories of the Indian Subcontinent",
            "Tales from the Indian Village",
            "Legends of the Himalayas",
            "Secrets of Ancient India",
            "Indian Mythology: A Modern Interpretation",
            "The Beauty of India’s Culture",
            "The Wisdom of the Vedas",
            "Spiritual Awakening in India",
            "The Essence of Yoga",
            "Maharajas and Their Kingdoms",
            "India's Freedom Struggle",
            "The Eternal Land: A Journey Through India",
            "A Taste of Indian Cuisine",
            "India’s Great Battles: From Ashoka to Independence",
            "Famous Mystics and Sages of India",
            "The Essence of Hindu Philosophy",
            "Vedic Science: Connecting the Past and Present",
            "The Ganges: India’s Sacred River",
            "The Wonders of Indian Monuments",
            "The Indian Epic: Ramayana and Mahabharata",
            "Buddhism in India: A Path to Enlightenment",
            "The Culture of Devotion in India",
            "Rural India: A Way of Life",
            "The Secrets of Indian Handicrafts",
            "Tales of the Indian Jungle: Myths and Stories",
            "The Gods of Hinduism: A Journey Through Sacred Texts",
            "The Ancient Art of Indian Astrology",
            "In the Land of the Sages: A Spiritual Journey",
            "The Power of Indian Meditation Practices",
            "The Land of the Tiger: India’s Wild Heart",
            "The Sacred Dance of India: Bharatanatyam and Kathak",
            "The Legacy of India’s Mughal Architecture",
            "Brahman: The Universal Spirit of India",
            "The Eternal Teachings of Lord Krishna",
            "The Healing Arts of Ayurveda and Yoga",
            "The Royal Courts of India: Emperors and Kings",
            "The Culture and Traditions of India",
            "Indian Art: From Ancient to Modern",
            "The Eternal River: Stories of the Ganges",
            "The Art of Indian Poetry and Literature",
            "The Spirit of India: A Journey of the Soul",
        ];
            foreach (range(1, 50) as $index) {
                Book::create([
                    'title' => $indianBookTitles[array_rand($indianBookTitles)],  
                    'author' => $faker->name(),     
                   
                ]);
            }
    }
}
