# Medicine - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medicine**

## CodeSystem: Medicine 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Medicine | *Version*:2.14.0 |
| Active as of 2022-10-06 | *Computable Name*:Medicine |

 
Medicine 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MedicinPraeparatDSR](ValueSet-MedicinPraeparatDSR.md)
* [Trombolysepraeparater](ValueSet-Trombolysepraeparater.md)
* [VarighedPostOPTrombDKR](ValueSet-VarighedPostOPTrombDKR.md)
* [VarighedPostOPTrombDKR1](ValueSet-VarighedPostOPTrombDKR1.md)
* [VarighedPostOPTrombDKR2](ValueSet-VarighedPostOPTrombDKR2.md)
* [VarighedPostOPTrombDKR3](ValueSet-VarighedPostOPTrombDKR3.md)
* [VarighedPostOPTrombDKRNOAK](ValueSet-VarighedPostOPTrombDKRNOAK.md)
* [VarighedPostOPTrombDKRVitKanta](ValueSet-VarighedPostOPTrombDKRVitKanta.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Medicine",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Medicine",
  "version" : "2.14.0",
  "name" : "Medicine",
  "title" : "Medicine",
  "status" : "active",
  "date" : "2022-10-06T00:00:00+02:00",
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
  "description" : "Medicine",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 9,
  "concept" : [
    {
      "code" : "beh-vitamin_k",
      "display" : "Vitamin-K-antagonist",
      "definition" : "Behandling med vitamin-K-antagonist"
    },
    {
      "code" : "noak_a",
      "display" : "NOAK halv dosis",
      "definition" : "NOAK halv dosis"
    },
    {
      "code" : "noak_b",
      "display" : "NOAK fuld dosis",
      "definition" : "NOAK fuld dosis"
    },
    {
      "code" : "antibiotics",
      "display" : "Antibiotics",
      "definition" : "Antibiotics / Antibiotika"
    },
    {
      "code" : "penicillin",
      "display" : "Penicillin",
      "definition" : "Penicillin"
    },
    {
      "code" : "penicillinase_stabile",
      "display" : "Penicillinasestabilt penicilin",
      "definition" : "Penicillinasestabilt penicilin"
    },
    {
      "code" : "cephalosporin",
      "display" : "Cefalosporin",
      "definition" : "Cefalosporin"
    },
    {
      "code" : "alteplase",
      "display" : "Actilyse (alteplase)",
      "definition" : "Actilyse (alteplase)"
    },
    {
      "code" : "tenecteplase",
      "display" : "Metalyse (tenecteplase)",
      "definition" : "Metalyse (tenecteplase)"
    }
  ]
}

```
