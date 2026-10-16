# Varighed PostOP trombolyseprofylakse (DKR)NOAK - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Varighed PostOP trombolyseprofylakse (DKR)NOAK**

## ValueSet: Varighed PostOP trombolyseprofylakse (DKR)NOAK 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/VarighedPostOPTrombDKRNOAK | *Version*:2.27.0 |
| Active as of 2024-05-13 | *Computable Name*:VarighedPostOPTrombDKRNOAK |

 
Planlagt varighed Postoperativ trombolyseprofylakse (DKR) NOAK 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "VarighedPostOPTrombDKRNOAK",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/VarighedPostOPTrombDKRNOAK",
  "version" : "2.27.0",
  "name" : "VarighedPostOPTrombDKRNOAK",
  "title" : "Varighed PostOP trombolyseprofylakse (DKR)NOAK",
  "status" : "active",
  "date" : "2024-05-13T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Planlagt varighed Postoperativ trombolyseprofylakse (DKR) NOAK",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Cyclus",
      "concept" : [{
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
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Medicine",
      "concept" : [{
        "code" : "noak_a",
        "display" : "Patienten er i varig NOAK-behandling og fortsætter med vanligt præparat i halv dosering de første 1-2 postoperative døgn"
      },
      {
        "code" : "noak_b",
        "display" : "Patienten er i varig NOAK-behandling og fortsætter med vanligt præparat i fuld dosering umiddelbart postoperativt"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
