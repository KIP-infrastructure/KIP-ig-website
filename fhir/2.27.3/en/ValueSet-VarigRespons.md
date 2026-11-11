# VarigRespons - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **VarigRespons**

## ValueSet: VarigRespons 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/VarigRespons | *Version*:2.27.3 |
| Active as of 2024-06-25 | *Computable Name*:VarigRespons |

 
VarigRespons 

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
  "id" : "VarigRespons",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/VarigRespons",
  "version" : "2.27.3",
  "name" : "VarigRespons",
  "title" : "VarigRespons",
  "status" : "active",
  "date" : "2024-06-25T00:00:00+02:00",
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
  "description" : "VarigRespons",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Profylaksebehandling",
      "concept" : [{
        "code" : "nofreeOfTreatment",
        "display" : "Nej, og patienten har været behandlingsfri indtil nu"
      },
      {
        "code" : "noagainprofylakse",
        "display" : "Nej, men patienten er genoptaget profylakse"
      }]
    },
    {
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "Y",
        "display" : "Ja"
      }]
    }]
  }
}

```
