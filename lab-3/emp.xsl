<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:output method="html"/>

  <xsl:template match="/">

    <html>

      <head>
        <title>My Company</title>
        <style>
            body{
              display:flex;
              flex-direction:column;
              justify-content:center;
            }
            table{
              display:block;
              text-align:center;
            }
        </style>
      </head>

      <body>

        <h2>Company</h2>

        <table id='main'>

          <tr bgcolor="#658864">
          
            <th >Name</th>
            <th >Phone</th>
            <th colspan="5">Address</th>
            <th>Email</th>

          </tr>

          <xsl:for-each select="employees/employee">
            <tr bgcolor="#DDDDDD">

              <td><xsl:value-of select="name"/></td>
              <td><xsl:value-of select="phones/phone"/></td>
              <td><xsl:value-of select="addresses/address/Street"/></td>
              <td><xsl:value-of select="addresses/address/BuildingNumber"/></td>
              <td><xsl:value-of select="addresses/address/Region"/></td>
              <td><xsl:value-of select="addresses/address/City"/></td>
              <td><xsl:value-of select="addresses/address/country"/></td>
              <td><xsl:value-of select="email"/></td>

            </tr>
          </xsl:for-each>

        </table>

      </body>

    </html>

  </xsl:template>

</xsl:stylesheet>
