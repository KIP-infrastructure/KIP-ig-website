# Behandlinger foretaget i forbindelse med MDS (MDS) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Behandlinger foretaget i forbindelse med MDS (MDS)**

## ValueSet: Behandlinger foretaget i forbindelse med MDS (MDS) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BehandlingMDS | *Version*:2.27.0 |
| Active as of 2022-07-19 | *Computable Name*:BehandlingMDS |

 
Behandlinger foretaget i forbindelse med MDS (MDS) 

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
  "id" : "BehandlingMDS",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BehandlingMDS",
  "version" : "2.27.0",
  "name" : "BehandlingMDS",
  "title" : "Behandlinger foretaget i forbindelse med MDS (MDS)",
  "status" : "active",
  "date" : "2022-07-19T00:00:00+02:00",
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
  "description" : "Behandlinger foretaget i forbindelse med MDS (MDS)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "BOQA",
        "display" : "Transfusion"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ATC",
      "concept" : [{
        "code" : "B03XA01",
        "display" : "Erythropoietin"
      },
      {
        "code" : "L01XX05",
        "display" : "Hydroxurea"
      },
      {
        "code" : "L04A",
        "display" : "Immunosupressiv behandling"
      },
      {
        "code" : "L04AX04",
        "display" : "Lenalidomid"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentUnspecified",
      "concept" : [{
        "code" : "g_csf",
        "display" : "G-CSF"
      },
      {
        "code" : "iron_chelated",
        "display" : "Jernkelerende behandling"
      },
      {
        "code" : "demethylating",
        "display" : "Demethylerende behandling"
      },
      {
        "code" : "chemotherapi_aml",
        "display" : "AML lignende kemoterapi"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden behandling"
      }]
    }]
  }
}

```
