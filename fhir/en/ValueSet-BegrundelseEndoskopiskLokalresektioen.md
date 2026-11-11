# Begrundelse for kun endoskopisk lokalresektion - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Begrundelse for kun endoskopisk lokalresektion**

## ValueSet: Begrundelse for kun endoskopisk lokalresektion 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BegrundelseEndoskopiskLokalresektioen | *Version*:2.27.3 |
| Active as of 2022-10-13 | *Computable Name*:BegrundelseEndoskopiskLokalresektioen |

 
Begrundelse for kun endoskopisk lokalresektion 

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
  "id" : "BegrundelseEndoskopiskLokalresektioen",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BegrundelseEndoskopiskLokalresektioen",
  "version" : "2.27.3",
  "name" : "BegrundelseEndoskopiskLokalresektioen",
  "title" : "Begrundelse for kun endoskopisk lokalresektion",
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
  "description" : "Begrundelse for kun endoskopisk lokalresektion",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen klinisk indikation for supplerende resektion jf. retningslinjer"
      },
      {
        "code" : "other",
        "display" : "Anden årsag"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureNotCompleted",
      "concept" : [{
        "code" : "patients_wish",
        "display" : "Patientønske"
      },
      {
        "code" : "comorbidity",
        "display" : "Komorbiditet"
      },
      {
        "code" : "death",
        "display" : "Død"
      }]
    }]
  }
}

```
