# Genoplivning indstillet - årsag - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Genoplivning indstillet - årsag**

## CodeSystem: Genoplivning indstillet - årsag 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/GenoplivStoppet | *Version*:2.13.0 |
| Active as of 2022-06-29 | *Computable Name*:GenoplivStoppet |

 
Årsager til indstilling af genoplivningsforsøg 

 This Code system is referenced in the content logical definition of the following value sets: 

* [GenoplivStoppet](ValueSet-GenoplivStoppet.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "GenoplivStoppet",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/GenoplivStoppet",
  "version" : "2.13.0",
  "name" : "GenoplivStoppet",
  "title" : "Genoplivning indstillet - årsag",
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
  "description" : "Årsager til indstilling af genoplivningsforsøg",
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "spontan_kreds",
      "display" : "Spontant kredsløb",
      "definition" : "Spontant kredsløb"
    },
    {
      "code" : "doed",
      "display" : "Død",
      "definition" : "Død"
    },
    {
      "code" : "kunstig_kreds",
      "display" : "Kunstig kredsløb (f.eks. ECMO, CPS, m.fl.)",
      "definition" : "Kunstig kredsløb (f.eks. ECMO, CPS, m.fl.)"
    }
  ]
}

```
