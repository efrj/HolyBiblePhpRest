# Holy Bible PHP Rest

![alt text](http://www.wowfreestuff.co.uk/wp-content/uploads/2017/06/free-holy-bible.jpg "Holy Bible")

Holy Bible PHP Rest is a simple and easy-to-execute REST application that returns Holy Bible verses in json format.

The translation of the Holy Bible used in this application is the King James version.

This application was developed with the PHP programming language with Slim Framework, Eloquent and SQLite database.

## Instructions

### Install

Use the composer command to install all the dependencies used in the application. The root directory of the application is the directory named "public".

For some biblical verse format json enter the book abbreviation, chapter and verse number in the url number to get the desired passage.

#### See the example:

**http://your-host/book/Re/chapter/4/verse/10**

##### json Return
```json
{"book":"Revelation","chapter":"4","verse":"10","text":"The four and twenty elders fall down before him that sat on the throne, and worship him that liveth for ever and ever, and cast their crowns before the throne, saying,"}
```
---

To get all the verses of a chapter, enter the abbreviation of the book and the chapter number in the url.

#### See the example:

**http://your-host/book/Re/chapter/4**

#### json Return
```json
{"book":"Revelation","chapter":"4","verses":[{"verse":"1","text":"After this I looked, and, behold, a door [was] opened in heaven: and the first voice which I heard [was] as it were of a trumpet talking with me; which said, Come up hither, and I will shew thee things which must be hereafter."},{"verse":"2","text":"And immediately I was in the spirit: and, behold, a throne was set in heaven, and [one] sat on the throne."},{"verse":"3","text":"And he that sat was to look upon like a jasper and a sardine stone: and [there was] a rainbow round about the throne, in sight like unto an emerald."},{"verse":"4","text":"And round about the throne [were] four and twenty seats: and upon the seats I saw four and twenty elders sitting, clothed in white raiment; and they had on their heads crowns of gold."},{"verse":"5","text":"And out of the throne proceeded lightnings and thunderings and voices: and [there were] seven lamps of fire burning before the throne, which are the seven Spirits of God."},{"verse":"6","text":"And before the throne [there was] a sea of glass like unto crystal: and in the midst of the throne, and round about the throne, [were] four beasts full of eyes before and behind."},{"verse":"7","text":"And the first beast [was] like a lion, and the second beast like a calf, and the third beast had a face as a man, and the fourth beast [was] like a flying eagle."},{"verse":"8","text":"And the four beasts had each of them six wings about [him]; and [they were] full of eyes within: and they rest not day and night, saying, Holy, holy, holy, Lord God Almighty, which was, and is, and is to come."},{"verse":"9","text":"And when those beasts give glory and honour and thanks to him that sat on the throne, who liveth for ever and ever,"},{"verse":"10","text":"The four and twenty elders fall down before him that sat on the throne, and worship him that liveth for ever and ever, and cast their crowns before the throne, saying,"},{"verse":"11","text":"Thou art worthy, O Lord, to receive glory and honour and power: for thou hast created all things, and for thy pleasure they are and were created."}]}
```
---
## List of books with their respective abbreviations for you informed in the book the url parameter

| Old Testament               | New Testament              |
| --------------------------- | -------------------------- |
| 1. Genesis - Ge             | 1. Matthew - Mt            |
| 2. Exodus - Ex              | 2. Mark - Mr               |
| 3. Leviticus - Le           | 3. Luke - Lu               |
| 4. Numbers - Nu             | 4. John - Joh              |
| 5. Deuteronomy - De         | 5. Acts - Ac               |
| 6. Joshua - Jos             | 6. Romans - Ro             |
| 7. Judges - Jg              | 7. 1 Corinthians - 1Co     |
| 8. Ruth - Ru                | 8. 2 Corinthians - 2Co     |
| 9. 1 Samuel - 1Sa           | 9. Galatians - Ga          |
| 10. 2 Samuel - 2Sa          | 10. Ephesians - Eph        |
| 11. 1 Kings - 1Ki           | 11. Philippians - Php      |
| 12. 2 Kings - 2Ki           | 12. Colossians - Col       |
| 13. 1 Chronicles - 1Ch      | 13. 1 Thessalonians - 1Th  |
| 14. 2 Chronicles - 2Ch      | 14. 2 Thessalonians - 2Th  |
| 15. Ezra - Ezr              | 15. 1 Timothy - 1Ti        |
| 16. Nehemiah - Ne           | 16. 2 Timothy - 2Ti        |
| 17. Esther - Es             | 17. Titus - Tit            |
| 18. Job - Job               | 18. Philemon - Phm         |
| 19. Psalms - Ps             | 19. Hebrews - Heb          |
| 20. Proverbs - Pr           | 20. James - Jas            |
| 21. Ecclesiastes - Ec       | 21. 1 Peter - 1Pe          |
| 22. Song of Solomon - Song  | 22. 2 Peter - 2Pe          |
| 23. Isaiah - Isa            | 23. 1 John - 1Jo           |
| 24. Jeremiah - Jer          | 24. 2 John - 2Jo           |
| 25. Lamentations - La       | 25. 3 John - 3Jo           |
| 26. Ezekiel - Eze           | 26. Jude - Jude            |
| 27. Daniel - Da             | 27. Revelation - Re        |
| 28. Hosea - Ho              |                            |
| 29. Joel - Joe              |                            |
| 30. Amos - Am               |                            |
| 31. Obadiah - Ob            |                            |
| 32. Jonah - Jon             |                            |
| 33. Micah - Mic             |                            |
| 34. Nahum - Na              |                            |
| 35. Habakkuk - Hab          |                            |
| 36. Zephaniah - Zep         |                            |
| 37. Haggai - Hag            |                            |
| 38. Zechariah - Zec         |                            |
| 39. Malachi - Mal           |                            |
