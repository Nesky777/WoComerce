const validateUser = (user) => {
    if (user.email.includes("@") && user.name.length > 2) {
      return "zarejstrowano";
    } else if (user.name.length <= 2) {
      return "nieprawidłowe imie";
    } else if (!user.email.includes("@")) {
      return "nieprawidłowy email";
    } else {
      return "ej śpisz";
    }
  }

console.log()