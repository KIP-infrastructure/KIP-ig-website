# Indikation for TES - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Indikation for TES**

## ValueSet: Indikation for TES 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/IndikationTES | *Version*:2.27.2 |
| Active as of 2022-10-13 | *Computable Name*:IndikationTES |

 
Indikation for TES 

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
  "id" : "IndikationTES",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/IndikationTES",
  "version" : "2.27.2",
  "name" : "IndikationTES",
  "title" : "Indikation for TES",
  "status" : "active",
  "date" : "2022-10-13T00:00:00+02:00",
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
  "description" : "Indikation for TES",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentIndication",
      "concept" : [{
        "code" : "histological_verified",
        "display" : "Histologisk verificeret karcinom"
      },
      {
        "code" : "diagnostic",
        "display" : "Benign/diagnostisk indikation"
      },
      {
        "code" : "additional_procedure",
        "display" : "Supplerende procedure efter endoskopisk lokalresektion"
      }]
    }]
  }
}

```
