<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>
<h2 align="center">Designs Collection</h2>
<table border="1" align="center">
<tr bgcolor="#18ffff">
<th align="center">Design</th>
<th align="center">Types</th>
<th align="center">Price</th>
</tr>
<xsl:for-each select="design/des">
<tr>
<td bgcolor="#76ff03"><xsl:value-of select="Design"/></td>
<td bgcolor="#e040fb"><b><xsl:value-of select="Types"/></b></td>
<td bgcolor="yellow"><xsl:value-of select="Price"/></td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>