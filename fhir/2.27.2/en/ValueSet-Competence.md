# FagligtNiveau - DAD - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FagligtNiveau - DAD**

## ValueSet: FagligtNiveau - DAD 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Competence | *Version*:2.27.2 |
| Active as of 2022-06-01 | *Computable Name*:Competence |

 
Fagligt niveau for udførende anæstesi personale 

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
  "id" : "Competence",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Competence",
  "version" : "2.27.2",
  "name" : "Competence",
  "title" : "FagligtNiveau - DAD",
  "status" : "active",
  "date" : "2022-06-01T00:00:00+02:00",
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
  "description" : "Fagligt niveau for udførende anæstesi personale",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Competence",
      "concept" : [{
        "code" : "nu_anesthesia",
        "display" : "Anæstesisygeplejerske"
      },
      {
        "code" : "nu_anesthesia_edu",
        "display" : "Sygeplejerske (uddannelse)"
      },
      {
        "code" : "anesthesiologist",
        "display" : "Speciallæge i anæstesi"
      },
      {
        "code" : "doc",
        "display" : "Læge"
      },
      {
        "code" : "doc_edu_anae_main",
        "display" : "Hoveduddannelsesforløb"
      },
      {
        "code" : "doc_edu_anae_intro",
        "display" : "Introduktionsforløb"
      },
      {
        "code" : "nu_recovery",
        "display" : "Opvågningsygeplejerske"
      }]
    }]
  }
}

```
