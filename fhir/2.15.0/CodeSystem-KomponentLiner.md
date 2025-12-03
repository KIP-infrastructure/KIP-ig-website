# Liner komponent - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Liner komponent**

## CodeSystem: Liner komponent 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/KomponentLiner | *Version*:2.15.0 |
| Active as of 2023-12-18 | *Computable Name*:KomponentLiner |

 
Liner komponenter med/uden post 

 This Code system is referenced in the content logical definition of the following value sets: 

* [LinerMedPostDKR](ValueSet-LinerMedPostDKR.md)
* [LinerUdenPostDKR](ValueSet-LinerUdenPostDKR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "KomponentLiner",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/KomponentLiner",
  "version" : "2.15.0",
  "name" : "KomponentLiner",
  "title" : "Liner komponent",
  "status" : "active",
  "date" : "2023-12-18T00:00:00+02:00",
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
  "description" : "Liner komponenter med/uden post",
  "content" : "complete",
  "count" : 10,
  "concept" : [
    {
      "code" : "ps_traditional_ap",
      "display" : "PS (traditionel PS post med AP constraint)"
    },
    {
      "code" : "ps_rotating",
      "display" : "PS med roterende platform"
    },
    {
      "code" : "ckk_VV",
      "display" : "CCK (Constrained Condylar - Post med VV og rotations constraint)"
    },
    {
      "code" : "ckk_rotating",
      "display" : "CCK med roterende platform"
    },
    {
      "code" : "bi_cs",
      "display" : "Bi-CS: bicruciate substituting (forreste og bageste korsbånd ofres og substitueres med post og 2 cams)"
    },
    {
      "code" : "traditional_cr",
      "display" : "Ingen constraint (traditionel CR)"
    },
    {
      "code" : "medial",
      "display" : "Medial stabilized (øget kongruens og konformitet kun medialt)"
    },
    {
      "code" : "medial_lateral",
      "display" : "Medial og lateral øget constraint (typisk er der øget constraint anteriort)"
    },
    {
      "code" : "rotating",
      "display" : "Rotating platform"
    },
    {
      "code" : "bi_retain",
      "display" : "Bi-cruciate retaining (begge korsbånd bevaret)"
    }
  ]
}

```
