# Observationssted - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observationssted**

## CodeSystem: Observationssted 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Observationssted | *Version*:2.14.2 |
| Active as of 2022-06-13 | *Computable Name*:Observationssted |

 
Sted hvor anæstesien observeres 

 This Code system is referenced in the content logical definition of the following value sets: 

* [LokalitetDANARREST](ValueSet-LokalitetDANARREST.md)
* [ObservationAfdeling](ValueSet-ObservationAfdeling.md)
* [ObservationsstedAN](ValueSet-ObservationsstedAN.md)
* [ObservationsstedPO](ValueSet-ObservationsstedPO.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Observationssted",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Observationssted",
  "version" : "2.14.2",
  "name" : "Observationssted",
  "title" : "Observationssted",
  "status" : "active",
  "date" : "2022-06-13T00:00:00+02:00",
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
  "description" : "Sted hvor anæstesien observeres",
  "content" : "complete",
  "count" : 13,
  "concept" : [
    {
      "code" : "ambulat",
      "display" : "Ambulatorium",
      "definition" : "Ambulatorium"
    },
    {
      "code" : "akutmodt",
      "display" : "Akutmodtagelse",
      "definition" : "Akutmodtagelse"
    },
    {
      "code" : "andet_obs",
      "display" : "Andet observationsafsnit",
      "definition" : "Andet observationsafsnit"
    },
    {
      "code" : "central_obs",
      "display" : "Centralt observationsafsnit",
      "definition" : "Centralt observationsafsnit"
    },
    {
      "code" : "intensiv",
      "display" : "Intensiv",
      "definition" : "Intensiv afdeling"
    },
    {
      "code" : "kardio_lab",
      "display" : "Kardiologisk laboratorium",
      "definition" : "Kardiologisk laboratorium"
    },
    {
      "code" : "neonatal",
      "display" : "Neonatalafdeling",
      "definition" : "Neonatalafdeling"
    },
    {
      "code" : "opergang",
      "display" : "Operationsgangen",
      "definition" : "Operationsgangen"
    },
    {
      "code" : "opvaagn",
      "display" : "Opvågningsafdeling",
      "definition" : "Opvågningsafdeling"
    },
    {
      "code" : "sengeafd",
      "display" : "Sengeafdeling",
      "definition" : "Sengeafdeling"
    },
    {
      "code" : "skadestue",
      "display" : "Skadestue / modtagelse",
      "definition" : "Skadestue / modtagelse"
    },
    {
      "code" : "egenafd",
      "display" : "Egen afdeling",
      "definition" : "Egen afdeling"
    },
    {
      "code" : "andet",
      "display" : "Andet",
      "definition" : "Andet"
    }
  ]
}

```
