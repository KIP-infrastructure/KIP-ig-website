# Intervals - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Intervals**

## CodeSystem: Intervals 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Intervals | *Version*:2.13.0 |
| Active as of 2022-09-19 | *Computable Name*:Intervals |

 
Intervals. Generic intervals. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [APInstabilitetDKR](ValueSet-APInstabilitetDKR.md)
* [ATCAntibiotikaprofylakseDosisDKR](ValueSet-ATCAntibiotikaprofylakseDosisDKR.md)
* [ATCAntibiotikaprofylakseVarighedDKR](ValueSet-ATCAntibiotikaprofylakseVarighedDKR.md)
* [BenlaengdeDHR](ValueSet-BenlaengdeDHR.md)
* [BrusklaesionArealDKRR](ValueSet-BrusklaesionArealDKRR.md)
* [DVTProfylakseDosisDKRR](ValueSet-DVTProfylakseDosisDKRR.md)
* [FrakturFriskhedDSR](ValueSet-FrakturFriskhedDSR.md)
* [KnaeakseDKR](ValueSet-KnaeakseDKR.md)
* [MLInstabilitetDKR](ValueSet-MLInstabilitetDKR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Intervals",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Intervals",
  "version" : "2.13.0",
  "name" : "Intervals",
  "title" : "Intervals",
  "status" : "active",
  "date" : "2022-09-19T00:00:00+02:00",
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
  "description" : "Intervals. Generic intervals.",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 24,
  "concept" : [
    {
      "code" : "<0",
      "display" : "<0",
      "definition" : "<0"
    },
    {
      "code" : "=<1",
      "display" : "=<1",
      "definition" : "=<1"
    },
    {
      "code" : ">1",
      "display" : ">1",
      "definition" : ">1"
    },
    {
      "code" : "=<2",
      "display" : "=<2",
      "definition" : "=<2"
    },
    {
      "code" : ">2",
      "display" : ">2",
      "definition" : ">2"
    },
    {
      "code" : ">3",
      "display" : ">3",
      "definition" : ">3"
    },
    {
      "code" : "<5",
      "display" : "<5",
      "definition" : "<5"
    },
    {
      "code" : "=<5",
      "display" : "=<5",
      "definition" : "=<5"
    },
    {
      "code" : ">5",
      "display" : ">5",
      "definition" : ">5"
    },
    {
      "code" : "=<6",
      "display" : "=<6",
      "definition" : "=<6"
    },
    {
      "code" : ">6",
      "display" : ">6",
      "definition" : ">6"
    },
    {
      "code" : "<8",
      "display" : "<8",
      "definition" : "<8"
    },
    {
      "code" : "=>8",
      "display" : "=>8",
      "definition" : "=>8"
    },
    {
      "code" : ">10",
      "display" : ">10",
      "definition" : ">10"
    },
    {
      "code" : ">14",
      "display" : ">14",
      "definition" : ">14"
    },
    {
      "code" : "=<15",
      "display" : "=<15",
      "definition" : "=<15"
    },
    {
      "code" : ">15",
      "display" : ">15",
      "definition" : ">15"
    },
    {
      "code" : "1-2",
      "display" : "1-2",
      "definition" : "1-2"
    },
    {
      "code" : "2-3",
      "display" : "2-3",
      "definition" : "2-3"
    },
    {
      "code" : "0-4",
      "display" : "0-4",
      "definition" : "0-4"
    },
    {
      "code" : "5-9",
      "display" : "5-9",
      "definition" : "5-9"
    },
    {
      "code" : "5-10",
      "display" : "5-10",
      "definition" : "5-10"
    },
    {
      "code" : "10-14",
      "display" : "10-14",
      "definition" : "10-14"
    },
    {
      "code" : "11-15",
      "display" : "11-15",
      "definition" : "11-15"
    }
  ]
}

```
