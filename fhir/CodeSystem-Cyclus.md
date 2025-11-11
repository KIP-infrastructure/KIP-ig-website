# Cyclus - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cyclus**

## CodeSystem: Cyclus 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Cyclus | *Version*:2.13.0 |
| Active as of 2023-05-17 | *Computable Name*:Cyclus |

 
Cyclus længde 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Cyclus](ValueSet-Cyclus.md)
* [DialyseOpstartDNSL](ValueSet-DialyseOpstartDNSL.md)
* [VarighedDKR](ValueSet-VarighedDKR.md)
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
  "id" : "Cyclus",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Cyclus",
  "version" : "2.13.0",
  "name" : "Cyclus",
  "title" : "Cyclus",
  "status" : "active",
  "date" : "2023-05-17T00:00:00+02:00",
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
  "description" : "Cyclus længde",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 11,
  "concept" : [
    {
      "code" : "0-6-dage",
      "display" : "0-6 dage",
      "definition" : "0-6 dage"
    },
    {
      "code" : "1-2-dage",
      "display" : "1-2 dage",
      "definition" : "1-2 dage"
    },
    {
      "code" : "3-4-dage",
      "display" : "3-4 dage",
      "definition" : "3-4 dage"
    },
    {
      "code" : "le5-dage",
      "display" : "<=5 dage",
      "definition" : "<=5 dage"
    },
    {
      "code" : "5-6-dage",
      "display" : "5-6 dage",
      "definition" : "5-6 dage"
    },
    {
      "code" : "6-10-dage",
      "display" : "6-10 dage",
      "definition" : "6-10 dage"
    },
    {
      "code" : "ge7-dage",
      "display" : ">=7 dage",
      "definition" : ">=7 dage"
    },
    {
      "code" : "gt10-dage",
      "display" : ">10 dage",
      "definition" : ">10 dage"
    },
    {
      "code" : "14-dage",
      "display" : "14 dage",
      "definition" : "14 dage"
    },
    {
      "code" : "21-dage",
      "display" : "21 dage",
      "definition" : "21 dage"
    },
    {
      "code" : "28-dage",
      "display" : "28 dage",
      "definition" : "28 dage"
    }
  ]
}

```
