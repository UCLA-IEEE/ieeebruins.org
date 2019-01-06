const SPREADSHEET_ID = '1xzxbdPNLEIT31dClA8FAZF3MMCsmEBwzhZOfp5eHEVc'
const API_BASE_URL = 'https://sheets.googleapis.com/v4/spreadsheets/'
const API_OPTIONS = '/values/Winter%202019!A1:G11?key='
// API_KEY provided in separate file key.js so that we don't have to push
// it to GitHub

$.ajax({
  // eslint-disable-next-line
  url: API_BASE_URL + SPREADSHEET_ID + API_OPTIONS + API_KEY,
  type: 'GET'
}).then(function(res) {
  let cells = $('.table1 tr td')
  let i = 1
  for (let j = 1; j < 11; j++) {
    for (let k = 1; k < 7; k++) {
      if (res.values[j][k] === undefined) {
        res.values[j][k] = ' '
      }

      var mystring = res.values[j][k]
      res.values[j][k] = mystring.split('\n').join('<br>')
      cells[i].innerHTML = res.values[j][k]
      i++
    }
    i++
  } // end of code for first table
})
