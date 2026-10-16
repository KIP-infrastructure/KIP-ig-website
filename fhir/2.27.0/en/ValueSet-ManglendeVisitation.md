# Visitationskriterier uopfyldt - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Visitationskriterier uopfyldt**

## ValueSet: Visitationskriterier uopfyldt 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ManglendeVisitation | *Version*:2.27.0 |
| Active as of 2022-09-06 | *Computable Name*:ManglendeVisitation |

 
Hvilke visitationskriterier var ikke opfyldt 

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
  "id" : "ManglendeVisitation",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ManglendeVisitation",
  "version" : "2.27.0",
  "name" : "ManglendeVisitation",
  "title" : "Visitationskriterier uopfyldt",
  "status" : "active",
  "date" : "2022-09-06T00:00:00+02:00",
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
  "description" : "Hvilke visitationskriterier var ikke opfyldt",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/VisitationCriteriaNotMet",
      "concept" : [{
        "code" : "not_terminally_ill",
        "display" : "Ikke uhelbredeligt syg"
      },
      {
        "code" : "no_symptomatology",
        "display" : "Ikke symptomatologi, som kræver en specialiseret/tværfaglig indsats"
      },
      {
        "code" : "not_diagnostically_completed",
        "display" : "Ikke diagnostisk færdigudredt"
      },
      {
        "code" : "not_informed",
        "display" : "Patienten ikke velinformeret om sin sygdom"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
