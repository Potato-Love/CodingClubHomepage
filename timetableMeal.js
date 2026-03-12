let date = new Date();
let month = ('0' + (1 + date.getMonth())).slice(-2);
let day = ('0' + date.getDate()).slice(-2);
const todayDate = month + day;

var timeTable = []
timeTable.push(document.getElementById('TtodayOne'))
timeTable.push(document.getElementById('TtodayTwo'))
timeTable.push(document.getElementById('TtodayThree'))
timeTable.push(document.getElementById('TtodayFour'))
timeTable.push(document.getElementById('TtodayFive'))
timeTable.push(document.getElementById('TtodaySix'))
timeTable.push(document.getElementById('TtodaySeven'))

fetch(`https://open.neis.go.kr/hub/hisTimetable?KEY=b8b9312c35c34fba9c0911c2ec261b52&ATPT_OFCDC_SC_CODE=K10&SD_SCHUL_CODE=7800351&Type=json&AY=2021&GRADE=1&CLASS_NM=6&ALL_TI_YMD=2021${todayDate}`)
    .then(function (response) {
        return response.json()
    })
    .then(function (data) {
        return data.hisTimetable
    })
    .then(function (data) {
        return data[1]
    })
    .then(function (data) {
        console.log(data)
        for (var i = 0; i < data.row.length; i++) {
            var todayList = data.row[i]['ITRT_CNTNT']
            console.log(todayList)
            timeTable[i].append(todayList);
        }
    })

var mealTable = [];
mealTable.push(document.getElementById('MtodayOne'))
mealTable.push(document.getElementById('MtodayTwo'))
mealTable.push(document.getElementById('MtodayThree'))
mealTable.push(document.getElementById('MtodayFour'))
mealTable.push(document.getElementById('MtodayFive'))
mealTable.push(document.getElementById('MtodaySix'))
mealTable.push(document.getElementById('MtodaySeven'))


    fetch(`https://open.neis.go.kr/hub/mealServiceDietInfo?KEY=b8b9312c35c34fba9c0911c2ec261b52&ATPT_OFCDC_SC_CODE=K10&SD_SCHUL_CODE=7800351&Type=json&MLSV_YMD=2021${todayDate}`)
    .then(function (response) {
        return response.json()
    })
    .then(function (data) {
        return data.mealServiceDietInfo[1].row[0].DDISH_NM
    })
    .then(function (data) {
        let meals = data.split('<br/>')
        for (let i = 0; i < meals.length; i++) {
            console.log(meals[i])
            mealTable[i].append(meals[i]);
        }
    })
    