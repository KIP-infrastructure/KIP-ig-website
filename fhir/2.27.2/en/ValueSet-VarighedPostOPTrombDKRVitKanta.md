# Varighed PostOP trombolyseprofylakse (DKR) VitK_anta - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Varighed PostOP trombolyseprofylakse (DKR) VitK_anta**

## ValueSet: Varighed PostOP trombolyseprofylakse (DKR) VitK_anta 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/VarighedPostOPTrombDKRVitKanta | *Version*:2.27.2 |
| Active as of 2024-05-13 | *Computable Name*:VarighedPostOPTrombDKRVitKanta |

 
Planlagt varighed Postoperativ trombolyseprofylakse (DKR)VitK_anta 

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
  "id" : "VarighedPostOPTrombDKRVitKanta",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/VarighedPostOPTrombDKRVitKanta",
  "version" : "2.27.2",
  "name" : "VarighedPostOPTrombDKRVitKanta",
  "title" : "Varighed PostOP trombolyseprofylakse (DKR) VitK_anta",
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
  "description" : "Planlagt varighed Postoperativ trombolyseprofylakse (DKR)VitK_anta",
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
        "code" : "beh-vitamin_k",
        "display" : "Patienten er i varig behandling med Vitamin-K-antagonist og fortsætter med tromboseprofylakse umiddelbart postoperativt indtil INR er i niveau"
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
