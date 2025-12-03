# SOR: Overflytning Hovedstaden (RETSPSYK) - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SOR: Overflytning Hovedstaden (RETSPSYK)**

## ValueSet: SOR: Overflytning Hovedstaden (RETSPSYK) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SOROverflytningRETSPSYKHS | *Version*:2.15.0 |
| Active as of 2024-03-13 | *Computable Name*:SOROverflytningRETSPSYKHS |

 
SOR: Overflytning Hovedstaden (RETSPSYK) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "SOROverflytningRETSPSYKHS",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SOROverflytningRETSPSYKHS",
  "version" : "2.15.0",
  "name" : "SOROverflytningRETSPSYKHS",
  "title" : "SOR: Overflytning Hovedstaden (RETSPSYK)",
  "status" : "active",
  "experimental" : true,
  "date" : "2024-03-13T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "SOR: Overflytning Hovedstaden (RETSPSYK)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SOR",
        "concept" : [
          {
            "code" : "339031000016008",
            "display" : "Børne- og Ungdomspsyk. Center Bispebjerg, B"
          },
          {
            "code" : "262681000016006",
            "display" : "PCGL, Psyk. sengeafd."
          },
          {
            "code" : "886951000016001",
            "display" : "Psyk. Center Nordsjælland, overafd. - N4"
          },
          {
            "code" : "262511000016000",
            "display" : "Psyk. Center Nordsjælland, overafd."
          },
          {
            "code" : "262191000016002",
            "display" : "Sct. Hans, Retspsykiatrisk sengeafd. R"
          },
          {
            "code" : "261341000016001",
            "display" : "Psyk. Center Amager, overafd."
          },
          {
            "code" : "262391000016004",
            "display" : "Psyk. Center Ballerup, overafd. Ballerup"
          },
          {
            "code" : "282651000016004",
            "display" : "Psyk. Center Bornholm"
          },
          {
            "code" : "261501000016006",
            "display" : "Psyk. Center København, overafd. N, Nørrebro-afdelingen"
          },
          {
            "code" : "262221000016007",
            "display" : "Psyk. Center Sct. Hans, overafd. M"
          },
          {
            "code" : "262671000016009",
            "display" : "Psyk. Center Glostrup, overafd."
          },
          {
            "code" : "261431000016003",
            "display" : "Børne- og Ungdomspsykiatrisk overafdeling, Bispebjerg, B1"
          },
          {
            "code" : "262181000016004",
            "display" : "Psyk. Center Sct. Hans, Retspsyk. overafd. R"
          }
        ]
      }
    ]
  }
}

```
