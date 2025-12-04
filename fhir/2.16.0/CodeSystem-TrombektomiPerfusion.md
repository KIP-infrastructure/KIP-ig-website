# Trombektomi-Perfusion (Danstroke) - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Trombektomi-Perfusion (Danstroke)**

## CodeSystem: Trombektomi-Perfusion (Danstroke) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/TrombektomiPerfusion | *Version*:2.16.0 |
| Active as of 2023-05-16 | *Computable Name*:TrombektomiPerfusion |

 
Perfusion opnået under trombektomi 

 This Code system is referenced in the content logical definition of the following value sets: 

* [TrombektomiPerfusion](ValueSet-TrombektomiPerfusion.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "TrombektomiPerfusion",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/TrombektomiPerfusion",
  "version" : "2.16.0",
  "name" : "TrombektomiPerfusion",
  "title" : "Trombektomi-Perfusion (Danstroke)",
  "status" : "active",
  "date" : "2023-05-16T00:00:00+02:00",
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
  "description" : "Perfusion opnået under trombektomi",
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "med_reperfusion",
      "display" : "Hel/delvis reperfusion",
      "definition" : "Trombektomi med efterfølgende helt eller delvist opnået reperfusion"
    },
    {
      "code" : "uden_reperfusion",
      "display" : "Uden efterflg. reperfusion",
      "definition" : "Trombektomi uden efterfølgende reperfusion"
    },
    {
      "code" : "spontan_reperfusion",
      "display" : "Spontan reperfusion",
      "definition" : "Spontan reperfusion"
    },
    {
      "code" : "hypoperfusion",
      "display" : "Hypoperfusion uden trombektomi",
      "definition" : "Stenosebetinget hypoperfusion uden trombektomi behandlet"
    }
  ]
}

```
