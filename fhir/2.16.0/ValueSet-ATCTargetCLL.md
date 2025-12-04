# ATC_CLL_target - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ATC_CLL_target**

## ValueSet: ATC_CLL_target (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ATCTargetCLL | *Version*:2.16.0 |
| Active as of 2022-07-13 | *Computable Name*:ATCTargetCLL |

 
ATC koder targeteret behandling - [CLL] 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 6 concepts

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
  "id" : "ATCTargetCLL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ATCTargetCLL",
  "version" : "2.16.0",
  "name" : "ATCTargetCLL",
  "title" : "ATC_CLL_target",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-07-13T00:00:00+02:00",
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
  "description" : "ATC koder targeteret behandling - [CLL]",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "none",
            "display" : "Ingen"
          },
          {
            "code" : "other",
            "display" : "Anden pathway inhibitor"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ATC",
        "concept" : [
          {
            "code" : "L01EL01",
            "display" : "Ibrutinib"
          },
          {
            "code" : "L01EM01",
            "display" : "Idelalisib"
          },
          {
            "code" : "L01XX52",
            "display" : "Venetoclax"
          },
          {
            "code" : "L01EL02",
            "display" : "Acalabrutinib"
          }
        ]
      }
    ]
  }
}

```
