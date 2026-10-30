# Transplantationstype (CML) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Transplantationstype (CML)**

## ValueSet: Transplantationstype (CML) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TransplantationstypeCML | *Version*:2.27.1 |
| Active as of 2022-07-18 | *Computable Name*:TransplantationstypeCML |

 
Transplantationstype (CML) 

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
  "id" : "TransplantationstypeCML",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TransplantationstypeCML",
  "version" : "2.27.1",
  "name" : "TransplantationstypeCML",
  "title" : "Transplantationstype (CML)",
  "status" : "active",
  "date" : "2022-07-18T00:00:00+02:00",
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
  "description" : "Transplantationstype (CML)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "BOQF0",
        "display" : "Autolog knoglemarvstransplantation"
      },
      {
        "code" : "BOQF1",
        "display" : "Allogen knoglemarvstransplantation"
      },
      {
        "code" : "BOQF2",
        "display" : "Non myeloablativ knoglemarvstransplantation (mini-KMT)"
      }]
    }]
  }
}

```
