Group_anagrams(["kita", "atik", "tika", "aku", "kia", "makan", "kua"]);

function Group_anagrams(arr) {
  const sortedArr = arr.map((item) => item.split("").sort().join(""));
  const setArr = new Set(sortedArr);
  const reducedObj = {};
  for (const setItem of setArr) {
    const indexArr = sortedArr.reduce((acc, cur, index) => {
      if (setItem === cur) {
        acc.push(index);
      }
      return acc;
    }, []);
    reducedObj[setItem] = indexArr;
  }
  const finalArr = [];
  for (const reduceItem in reducedObj) {
    finalArr.push(reducedObj[reduceItem].map((item) => arr[item]));
  }
  console.log(finalArr);
  return finalArr;
}
