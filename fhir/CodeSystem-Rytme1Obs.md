# Hjerterytme - første obs - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hjerterytme - første obs**

## CodeSystem: Hjerterytme - første obs 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Rytme1Obs | *Version*:2.13.0 |
| Active as of 2022-06-29 | *Computable Name*:Rytme1Obs |

 
Første observerede hjerterytme 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Rytme1Obs](ValueSet-Rytme1Obs.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Rytme1Obs",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Rytme1Obs",
  "version" : "2.13.0",
  "name" : "Rytme1Obs",
  "title" : "Hjerterytme - første obs",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Første observerede hjerterytme",
  "content" : "complete",
  "count" : 6,
  "concept" : [
    {
      "code" : "vf",
      "display" : "VF",
      "definition" : "VF"
    },
    {
      "code" : "pulslos_vt",
      "display" : "Pulsløs VT",
      "definition" : "Pulsløs VT"
    },
    {
      "code" : "pea",
      "display" : "PEA",
      "definition" : "PEA"
    },
    {
      "code" : "asystoli",
      "display" : "Asystoli",
      "definition" : "Asystoli"
    },
    {
      "code" : "ingen_man",
      "display" : "Ingen manuel rytmeanalyse",
      "definition" : "Ingen manuel rytmeanalyse"
    },
    {
      "code" : "pulsgiv",
      "display" : "Pulsgivende",
      "definition" : "Pulsgivende"
    }
  ]
}

```
