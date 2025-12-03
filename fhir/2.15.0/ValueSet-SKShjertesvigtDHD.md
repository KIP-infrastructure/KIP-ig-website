# SKS: hjertesvigt til DHD - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SKS: hjertesvigt til DHD**

## ValueSet: SKS: hjertesvigt til DHD (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SKShjertesvigtDHD | *Version*:2.15.0 |
| Active as of 2022-07-21 | *Computable Name*:SKShjertesvigtDHD |

 
SKS koder relevante for DHD 

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
  "id" : "SKShjertesvigtDHD",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SKShjertesvigtDHD",
  "version" : "2.15.0",
  "name" : "SKShjertesvigtDHD",
  "title" : "SKS: hjertesvigt til DHD",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-07-21T00:00:00+02:00",
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
  "description" : "SKS koder relevante for DHD",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
        "concept" : [
          {
            "code" : "DI110",
            "display" : "DI110 - Hypertensiv hjertesygdom med inkompenseret hjertesvigt"
          },
          {
            "code" : "DI130",
            "display" : "DI130 - Hypertensiv hjertesygdom og nyresygdom med hjertesvigt"
          },
          {
            "code" : "DI132",
            "display" : "DI132 - Hypertensiv hjertesygdom og nyresygdom med hjertesvigt og nyresvigt"
          },
          {
            "code" : "DI420",
            "display" : "DI420 - Dilateret kardiomyopati"
          },
          {
            "code" : "DI426",
            "display" : "DI426 - Alkoholisk kardiomyopati"
          },
          {
            "code" : "DI427",
            "display" : "DI427 - Kardiomyopati forårsaget af lægemiddel eller andet agens"
          },
          {
            "code" : "DI429",
            "display" : "DI429 - Kardiomyopati UNS"
          },
          {
            "code" : "DI500",
            "display" : "DI500 - Kronisk hjerteinsufficiens"
          },
          {
            "code" : "DI501",
            "display" : "DI501 - Venstresidig hjerteinsufficiens"
          },
          {
            "code" : "DI501B",
            "display" : "DI501B - Kardielt lungeødem"
          },
          {
            "code" : "DI509",
            "display" : "DI509 - Hjertesvigt UNS"
          }
        ]
      }
    ]
  }
}

```
