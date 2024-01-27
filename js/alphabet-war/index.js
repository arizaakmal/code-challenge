// Cara panjang
function alphabetWar(fight) {
  let left = 0;
  let right = 0;
  let alphabet = fight.split("");

  for (i = 0; i < fight.length; i++) {
    switch (alphabet[i]) {
      case "w":
        left += 4;
        break;
      case "p":
        left += 3;
        break;
      case "b":
        left += 2;
        break;
      case "s":
        left += 1;
        break;
      case "m":
        right += 4;
        break;
      case "q":
        right += 3;
        break;
      case "d":
        right += 2;
        break;
      case "z":
        right += 1;
        break;
      default:
        break;
    }
  }

  if (left > right) {
    return "Left side wins!";
  } else if (right > left) {
    return "Right side wins!";
  } else {
    return "Let's fight again!";
  }
}

//Cara cepat
function alphabetWar(fight) {
  const values = { w: 4, p: 3, b: 2, s: 1, m: -4, q: -3, d: -2, z: -1 };
  const result = [...fight].reduce((sum, char) => sum + (values[char] || 0), 0);

  return result > 0 ? "Left side wins!" : result < 0 ? "Right side wins!" : "Let's fight again!";
}

alphabetWar("w");
