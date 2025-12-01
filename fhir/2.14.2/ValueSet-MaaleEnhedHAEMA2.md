# Måleenhed HÆMA-2 - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Måleenhed HÆMA-2**

## ValueSet: Måleenhed HÆMA-2 (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MaaleEnhedHAEMA2 | *Version*:2.14.2 |
| Active as of 2022-06-28 | *Computable Name*:MaaleEnhedHAEMA2 |

 
Måleenheder HÆMA - udfaldsrum med 2 enheder 

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
  "id" : "MaaleEnhedHAEMA2",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MaaleEnhedHAEMA2",
  "version" : "2.14.2",
  "name" : "MaaleEnhedHAEMA2",
  "title" : "Måleenhed HÆMA-2",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-06-28T00:00:00+02:00",
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
  "description" : "Måleenheder HÆMA - udfaldsrum med 2 enheder",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MaaleEnheder",
        "concept" : [
          {
            "code" : "g-l",
            "display" : "g/L - Gram per liter"
          },
          {
            "code" : "μmol-l",
            "display" : "μmol/L - Mikromol per liter"
          }
        ]
      }
    ]
  }
}

```
