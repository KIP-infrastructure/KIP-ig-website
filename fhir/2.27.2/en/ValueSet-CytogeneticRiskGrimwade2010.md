# Cytogenetisk risiki Grimwade 2010 - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cytogenetisk risiki Grimwade 2010**

## ValueSet: Cytogenetisk risiki Grimwade 2010 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/CytogeneticRiskGrimwade2010 | *Version*:2.27.2 |
| Active as of 2022-07-13 | *Computable Name*:CytogeneticRiskGrimwade2010 |

 
Cytogenetiske risiko vurdering i henhold til Grimwade 2010 kriterier 

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
  "id" : "CytogeneticRiskGrimwade2010",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/CytogeneticRiskGrimwade2010",
  "version" : "2.27.2",
  "name" : "CytogeneticRiskGrimwade2010",
  "title" : "Cytogenetisk risiki Grimwade 2010",
  "status" : "active",
  "date" : "2022-07-13T00:00:00+02:00",
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
  "description" : "Cytogenetiske risiko vurdering i henhold til Grimwade 2010 kriterier",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "high",
        "display" : "Høj (Grimwade 2010)"
      },
      {
        "code" : "normal",
        "display" : "Intermediær (Grimwade 2010)"
      },
      {
        "code" : "low",
        "display" : "Lav (Grimwade 2010)"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasesUnspecified",
      "concept" : [{
        "code" : "al",
        "display" : "Akut lymfatisk leukæmi (ALL)"
      }]
    },
    {
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "UNK",
        "display" : "Uvist"
      }]
    }]
  }
}

```
