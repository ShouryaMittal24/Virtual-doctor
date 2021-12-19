function getBotResponse(input) {
    
    if (input == "I have fever") {
        return "Hope you'll get well soon, Take Paracetamol 2 times a day, Drink hot water and turmeric milk ";
    } else if (input == "I have stomach ache") {
        return "Hope you'll get well soon Take Pudin Hara at night after taking meal avoid oily food and eat as light as you can";
    } else if (input == "I have Headache") {
        return "Hope you'll get well soon,  Take Crocin with a glass of water when you feel Headache and Take a proprer Nap for fast recovery";
    } else if (input == "How to give First Aid for burns, cuts and bites") {
        return "Checkout the procedure in this link: https://www.webmd.com/first-aid/first-aid-tips";
    } else if (input == "hello") {
        return "Hello there!";
    } else if (input == "goodbye") {
        return "Talk to you later!";
    } else {
        return "Try asking something else!";
    }
}