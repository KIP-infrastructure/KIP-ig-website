# Varighed PostOP trombolyseprofylakse (DKR) - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Varighed PostOP trombolyseprofylakse (DKR)**

## ValueSet: Varighed PostOP trombolyseprofylakse (DKR) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/VarighedPostOPTrombDKR | *Version*:2.17.1 |
| Active as of 2025-12-01 | *Computable Name*:VarighedPostOPTrombDKR |

 
Planlagt varighed Postoperativ trombolyseprofylakse (DKR) 

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
  "id" : "VarighedPostOPTrombDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/VarighedPostOPTrombDKR",
  "version" : "2.17.1",
  "name" : "VarighedPostOPTrombDKR",
  "title" : "Varighed PostOP trombolyseprofylakse (DKR)",
  "status" : "active",
  "experimental" : true,
  "date" : "2025-12-01T00:00:00+01:00",
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
  "description" : "Planlagt varighed Postoperativ trombolyseprofylakse (DKR)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Cyclus",
        "concept" : [
          {
            "code" : "le5-dage",
            "display" : "<= 5 dage (kun under indlæggelse)"
          },
          {
            "code" : "6-10-dage",
            "display" : "6-10 dage (forlænget profylakse)"
          },
          {
            "code" : "gt10-dage",
            "display" : ">10 dage (ekstra forlænget profylakse)"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Medicine",
        "concept" : [
          {
            "code" : "beh-vitamin_k",
            "display" : "Patienten er i varig behandling med Vitamin-K-antagonist og fortsætter med tromboseprofylakse umiddelbart postoperativt indtil INR er i niveau"
          },
          {
            "code" : "noak_a",
            "display" : "Patienten er i varig NOAK-behandling og fortsætter med vanligt præparat i halv dosering de første 1-2 postoperative døgn"
          },
          {
            "code" : "noak_b",
            "display" : "Patienten er i varig NOAK-behandling og fortsætter med vanligt præparat i fuld dosering umiddelbart (på operationsdagen)"
          },
          {
            "code" : "noak_c",
            "display" : "Patienten er i varig NOAK-behandling og fortsætter med vanligt præparat i fuld dosering fra første postoperative dag"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "other",
            "display" : "Andet"
          }
        ]
      }
    ]
  }
}

```
