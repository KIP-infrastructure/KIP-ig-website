# Varighed PostOP trombolyseprofylakse (DKR)2 - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Varighed PostOP trombolyseprofylakse (DKR)2**

## ValueSet: Varighed PostOP trombolyseprofylakse (DKR)2 (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/VarighedPostOPTrombDKR2 | *Version*:2.14.0 |
| Retired as of 2024-05-13 | *Computable Name*:VarighedPostOPTrombDKR2 |

 
Planlagt varighed Postoperativ trombolyseprofylakse (DKR)2 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

Expansions are not generated for retired value sets

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
  "id" : "VarighedPostOPTrombDKR2",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/VarighedPostOPTrombDKR2",
  "version" : "2.14.0",
  "name" : "VarighedPostOPTrombDKR2",
  "title" : "Varighed PostOP trombolyseprofylakse (DKR)2",
  "status" : "retired",
  "experimental" : true,
  "date" : "2024-05-13T00:00:00+02:00",
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
  "description" : "Planlagt varighed Postoperativ trombolyseprofylakse (DKR)2",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Cyclus",
        "concept" : [
          {
            "code" : "le5-dage",
            "display" : "1: <= 5 dage (kun under indlæggelse)"
          },
          {
            "code" : "6-10-dage",
            "display" : "2: 6-10 dage (forlænget profylakse)"
          },
          {
            "code" : "gt10-dage",
            "display" : "3: >10 dage (ekstra forlænget profylakse)"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Medicine",
        "concept" : [
          {
            "code" : "beh-vitamin_k",
            "display" : "4: Patienten er i varig behandling med Vitamin-K-antagonist og fortsætter med tromboseprofylakse umiddelbart postoperativt indtil INR er i niveau"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "other",
            "display" : "7: Andet"
          }
        ]
      }
    ]
  }
}

```
