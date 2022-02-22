function Main()
menu = gg.choice({
'Dragon City',
'Monster Legends',
},nil, '')
if menu == 1 then as() end
if menu == 2 then ae() end
end

function as()
local input = {}
local configFile = gg.EXT_CACHE_DIR .. '/' .. 
gg.getFile():match('') .. 'logina.txt'
local data = loadfile(configFile)
if data ~= nil then
data = data()
end
USER = 'http://dragoncitytool.freecluster.eu/users/user.php'
input = gg.prompt({'Cookies','','user id','','Exit'}, data, {'checkbox','text','checkbox','number','checkbox'})
if input == nil then end
if not input then return end
gg.saveVariable(input, configFile)
SA = '{'..input[2]..'}'
SE = '{'..input[4]..'}'

if input[1] then
input[2] = input[2]
L = gg.makeRequest(USER,nil,USERSAVE).content
if not L then gg.alert('SERVER: Allow Internet Connection...') else
pcall(load(L)) end
end

if input[3] then
input[4] = input[4]

end

if input[5] then
os.exit()
end
end

function ae()

end

gg.setVisible(true)
while true do
if gg.isVisible() then
gg.setVisible(false)
Main() end end
