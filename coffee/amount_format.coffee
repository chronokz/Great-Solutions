# Convert String with space to Integer
# 10 0000 00 -> 10000000

amount_format = (price) ->
	value = price.replace(' ', '')
	parseInt value || 0