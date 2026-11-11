# Genoplivning indstillet - årsag - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Genoplivning indstillet - årsag**

## ValueSet: Genoplivning indstillet - årsag 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/GenoplivStoppet | *Version*:2.27.2 |
| Active as of 2022-06-29 | *Computable Name*:GenoplivStoppet |

 
Årsager til indstilling af genoplivningsforsøg 

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
  "id" : "GenoplivStoppet",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/GenoplivStoppet",
  "version" : "2.27.2",
  "name" : "GenoplivStoppet",
  "title" : "Genoplivning indstillet - årsag",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Årsager til indstilling af genoplivningsforsøg",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenoplivStoppet",
      "concept" : [{
        "code" : "spontan_kreds",
        "display" : "Spontant kredsløb"
      },
      {
        "code" : "doed",
        "display" : "Død"
      },
      {
        "code" : "kunstig_kreds",
        "display" : "Kunstig kredsløb (f.eks. ECMO, CPS, m.fl.)"
      }]
    }]
  }
}

```
