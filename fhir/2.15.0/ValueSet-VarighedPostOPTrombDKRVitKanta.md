# Varighed PostOP trombolyseprofylakse (DKR) VitK_anta - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Varighed PostOP trombolyseprofylakse (DKR) VitK_anta**

## ValueSet: Varighed PostOP trombolyseprofylakse (DKR) VitK_anta (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/VarighedPostOPTrombDKRVitKanta | *Version*:2.15.0 |
| Active as of 2024-05-13 | *Computable Name*:VarighedPostOPTrombDKRVitKanta |

 
Planlagt varighed Postoperativ trombolyseprofylakse (DKR)VitK_anta 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 5 concepts

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
  "id" : "VarighedPostOPTrombDKRVitKanta",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/VarighedPostOPTrombDKRVitKanta",
  "version" : "2.15.0",
  "name" : "VarighedPostOPTrombDKRVitKanta",
  "title" : "Varighed PostOP trombolyseprofylakse (DKR) VitK_anta",
  "status" : "active",
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
  "description" : "Planlagt varighed Postoperativ trombolyseprofylakse (DKR)VitK_anta",
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
