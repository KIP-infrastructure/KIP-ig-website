# WOOS - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **WOOS**

## CodeSystem: WOOS 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/WOOS | *Version*:2.14.1 |
| Active as of 2022-10-07 | *Computable Name*:WOOS |

 
WOOS 

 This Code system is referenced in the content logical definition of the following value sets: 

* [WOOSArmloeftDSR](ValueSet-WOOSArmloeftDSR.md)
* [WOOSHaenderDSR](ValueSet-WOOSHaenderDSR.md)
* [WOOSTraeningDSR](ValueSet-WOOSTraeningDSR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "WOOS",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/WOOS",
  "version" : "2.14.1",
  "name" : "WOOS",
  "title" : "WOOS",
  "status" : "active",
  "date" : "2022-10-07T00:00:00+02:00",
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
  "description" : "WOOS",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 8,
  "concept" : [
    {
      "code" : "unable_to_life_arm",
      "display" : "Kan slet ikke løfte armen",
      "definition" : "Kan slet ikke løfte armen"
    },
    {
      "code" : "left_handed",
      "display" : "Venstrehåndet",
      "definition" : "Venstrehåndet"
    },
    {
      "code" : "right_handed",
      "display" : "Højrehåndet",
      "definition" : "Højrehåndet"
    },
    {
      "code" : "both_hands",
      "display" : "Bruger begge hænder lige godt",
      "definition" : "Bruger begge hænder lige godt"
    },
    {
      "code" : "no_physiotherapy",
      "display" : "Ingen fysioterapi",
      "definition" : "Ingen fysioterapi"
    },
    {
      "code" : "home_training",
      "display" : "Hjemmetræning efter instruks",
      "definition" : "Hjemmetræning efter instruks"
    },
    {
      "code" : "supervised_municipality",
      "display" : "Superviseret fysioterapi via kommunen  (træning eller noget af denne foregår hos fysioterapeut i kommunen hvor du bor)",
      "definition" : "Superviseret fysioterapi via kommunen  (træning eller noget af denne foregår hos fysioterapeut i kommunen hvor du bor)"
    },
    {
      "code" : "supervised_hospital",
      "display" : "Superviseret fysioterapi på sygehus/hospital  (træningen eller noget af denne foregår hos fysioterapi på sygehus)",
      "definition" : "Superviseret fysioterapi på sygehus/hospital  (træningen eller noget af denne foregår hos fysioterapi på sygehus)"
    }
  ]
}

```
