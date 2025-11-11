# Artifacts Summary - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Behavior: Search Parameters 

These define the properties by which a RESTful server can be searched. They can also be used for sorting and including related resources.

| | |
| :--- | :--- |
| [CarePlanReadOrWriteAccess](SearchParameter-CarePlanReadOrWriteAccess.md) | Search a CarePlan for readAccess or writeAccess SOR code |
| [CarePlanSorAuthor](SearchParameter-CarePlanSorAuthor.md) | Search by SOR-code as author on a CarePlan |
| [CprPatient](SearchParameter-CprPatient.md) | Search by CPR in Patient |
| [PlanDefinition url+version](SearchParameter-SP-PlanDefinition-urlversion.md) | SearchParameter to match PlanDefinition by both url and version |
| [PlanDefinitionLatest](SearchParameter-PlanDefinitionLatest.md) | Search PlanDefinition for 'latest' extension |
| [PlanDefinitionUuid](SearchParameter-PlanDefinitionUuid.md) | Search by uuid in PlanDefinition |
| [Questionnaire url+version](SearchParameter-SP-Questionnaire-urlversion.md) | SearchParameter to match Questionnaire by both url and version |
| [QuestionnaireLatest](SearchParameter-QuestionnaireLatest.md) | Search Questionnaire for 'latest' extension |
| [QuestionnaireResponseOnCarePlan](SearchParameter-QuestionnaireResponseOnCarePlan.md) | Search by a QuestionnaireResponse reference for a CarePlan |
| [QuestionnaireResponseResponsibleOnCarePlan](SearchParameter-QuestionnaireResponseResponsibleOnCarePlan.md) | Search a CarePlan for responsible SOR code on a QuestionnaireResponse |
| [QuestionnaireUuid](SearchParameter-QuestionnaireUuid.md) | Search by uuid in Questionnaire |
| [SorQuestionnaire](SearchParameter-SorQuestionnaire.md) | Search By SOR in Questionnaire |
| [SorQuestionnaireResponse](SearchParameter-SorQuestionnaireResponse.md) | Search By SOR in Questionnaire |

### Structures: Extension Definitions 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Search Parameter - CPR for Patient](StructureDefinition-cpr.md) | Limit response of Patient to match given CPR. |
| [Search Parameter - Latest for PlanDefinitions](StructureDefinition-PDLatest.md) | Limit response of PlanDefinitions to match given Latest. |
| [Search Parameter - Latest for Questionnaires](StructureDefinition-QLatest.md) | Limit response of Questionnaires to match given Latest. |
| [Search Parameter - QuestionnaireReponse on CarePLan](StructureDefinition-questionnaire-response-reference.md) | Find CarePlan which cointains a QuestionnaireResponse |
| [Search Parameter - QuestionnaireReponse responsible sor on CarePLan](StructureDefinition-questionnaire-response-responsible-sor.md) | Find CarePlan which cointains a QuestionnaireResponse with a specific responsible sorcode |
| [Search Parameter - SOR-code author on a CarePlan](StructureDefinition-SorAuthor.md) | Limit responses of CarePlan to match the author of the given SOR-code. |
| [Search Parameter - Sor Questionnaire](StructureDefinition-sor.md) | Limit response of Questionnaires to match given SOR-codes. |
| [Search Parameter - Sor QuestionnaireResponse](StructureDefinition-sorCode.md) | Limit response of QuestionnaireResponses to match given SOR-codes. |
| [Search Parameter - UUID for PlanDefinitions](StructureDefinition-PDUuid.md) | Limit response of PlanDefinitions to match given UUID. |
| [Search Parameter - UUID for Questionnaires](StructureDefinition-QUuid.md) | Limit response of Questionnaires to match given UUID. |
| [Search Parameter - write or read access sor on CarePLan](StructureDefinition-access-sor-code.md) | Search a CarePlan for readAccess or writeAccess SOR code. NOTE May match just the start of a string (https://build.fhir.org/codesystem-search-param-type.html#search-param-type-string) |

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [ALD_Kemoterapi](ValueSet-ALDkemoterapi.md) | ALD kemoterapi |
| [AK Behandling (DKR)](ValueSet-AKBehandlingDKR.md) | AK Behandling (DKR) |
| [AP-instabilitet (DKR)](ValueSet-APInstabilitetDKR.md) | AP-instabilitet (DKR) |
| [ASA klassifikation I-V](ValueSet-AsaIV.md) | ASA klassifikation: De udvalgte koder for ASA fra I-V |
| [ASA klassifikation I-V Kort](ValueSet-AsaIVkort.md) | ASA klassifikation: De udvalgte koder for ASA fra I-V i kort version |
| [ASA klassifikation I-VI](ValueSet-ASAIVI.md) | ASA klassifikation I-VI |
| [ASA klassifikation I-VI Kort](ValueSet-ASAIVIkort.md) | ASA klassifikation I-VI i kort version |
| [ATC - Antibiotikaprofylakse (DKR)](ValueSet-ATCAntibiotikaprofylakseDKR.md) | ATC - Antibiotikaprofylakse (DKR) |
| [ATC - Antibiotikaprofylakse, dosis (DKR)](ValueSet-ATCAntibiotikaprofylakseDosisDKR.md) | ATC - Antibiotikaprofylakse, dosis (DKR) |
| [ATC - Antibiotikaprofylakse, varighed (DKR)](ValueSet-ATCAntibiotikaprofylakseVarighedDKR.md) | ATC - Antibiotikaprofylakse, varighed (DKR) |
| [ATC - Tromboseprofylakse (DKR)](ValueSet-ATCTromboseprofylakseDKR.md) | ATC - Tromboseprofylakse (DKR) |
| [ATC DMPN](ValueSet-ATCDMPN.md) | ATC koder DMPN behandling. Erstattet af nyt VS fra okt. 2024 |
| [ATC DMPN 202410](ValueSet-ATCDMPN202410.md) | ATC koder DMPN behandling. Valueset erstatter tidligere fra okt. 2024 |
| [ATC: Præparater for kemobehandling](ValueSet-ATCChemoPreparation.md) | ATC koder for præparater for kemobehandling |
| [ATC_CLL_immunterapi](ValueSet-ATCImmunotherapyCLL.md) | ATC koder immunterapi - [CLL] |
| [ATC_CLL_kemo](ValueSet-ATCChemoCLL.md) | ATC koder kemoterapi - [CLL] |
| [ATC_CLL_target](ValueSet-ATCTargetCLL.md) | ATC koder targeteret behandling - [CLL] |
| [Acetabulum knogletab klassifikation (DHR)](ValueSet-AcetabulumKnogletabKlassifikationDHR.md) | Acetabulum knogletab klassifikation (DHR) |
| [Administrationstype Jern (DCCG)](ValueSet-AdministrationTypeDCCG.md) | Administration af præoperativ jernbehandling |
| [Afdelinger til DANDEM](ValueSet-AfdelingDandem.md) | Afdelinger til DANDEM |
| [Aflastende procedure DCCG](ValueSet-AflastendeProcedure.md) | Aflastende procedure DCCG |
| [Aktivitet (DKRR)](ValueSet-AktivitetDKRR.md) | Aktivitet (DKRR) |
| [Aktivitet: Sport (DKRR)](ValueSet-AktivitetSportDKRR.md) | Aktivitet: Sport (DKRR) |
| [Aktuel Sygdomsforløb](ValueSet-AktuelSygdomsforlob.md) | Er patienten i det aktuelle sygdomsforløb |
| [Alkohol - 7/14 genstande per uge](ValueSet-Alkohol714.md) | Udfald for alkohol - 7/14 genstande per uge |
| [Alkohol 0-10](ValueSet-Alkohol0til10.md) | Udfald for alkohol |
| [Alkohol 0-21](ValueSet-Alkohol021.md) | 0, 1-21 eller flere genstande per uge |
| [Alle Måleenheder](ValueSet-AlleMaaleEnheder.md) | Alle måleenheder |
| [Alloplastiktype (DKR)](ValueSet-AlloplastiktypeDKR.md) | Alloplastiktype (DKR) |
| [AnastomoseLaekage gradingering](ValueSet-AnastomoseLaekageGradingering.md) | AnastomoseLaekage gradingering |
| [AnastomoseLaekage graduering](ValueSet-AnastomoseLaekageGraduering.md) | AnastomoseLaekage graduering |
| [Anastomoselaekage Konsekvens](ValueSet-AnastomoselaekageKonsekvens.md) | Anastomoselaekage Konsekvens |
| [Anastomoselækage](ValueSet-Anastomoselaekage.md) | Anastomoselækage for operationen, og hvordan den er håndteret |
| [Anastomosetype 1](ValueSet-AnastomoseType1.md) | Anastomosetype 1 |
| [Anastomosetype 2](ValueSet-AnastomoseType2.md) | Anastomosetype 2 |
| [Anastomosetype 3](ValueSet-AnastomoseType3.md) | Anastomosetype 3 |
| [Anatomisk lokation 1](ValueSet-AnatomiskLokation1.md) | Anatomisk lokation 1 |
| [Anatomisk lokation 2](ValueSet-AnatomiskLokation2.md) | Anatomisk lokation 2 |
| [Anatomisk lokation 3](ValueSet-AnatomiskLokation3.md) | Anatomisk lokation 3 |
| [Anatomisk lokation 4](ValueSet-AnatomiskLokation4.md) | Anatomisk lokation 4 |
| [Anatomisk lokation for anurisme [SAH]](ValueSet-LokationAneurismeSAH.md) | Anatomisk lokation for anurisme [SAH] |
| [Anden blødning (DAP)](ValueSet-AndenBloedningDAP.md) | Anden blødning fundet i forbindelse med billeddiagnostisk undersøgelse (DAP) |
| [Ann Arbor gradering klassifikation](ValueSet-AnnArborStagingClassification.md) | Ann Arbor er en gradering klassifikation til Hodgkins desease |
| [Antibiotika (med/uden)](ValueSet-AntibiotikaMedUden.md) | Antibiotika (med/uden) |
| [Antibiotikaprofylakse (DHR)](ValueSet-AntibiotikaprofylakseDHR.md) | Antibiotikaprofylakse (DHR) |
| [Antibiotikaprofylakse (DKRR)](ValueSet-AntibiotikaprofylakseDKRR.md) | Antibiotikaprofylakse (DKRR) |
| [Anurisme stoerrelse [SAH]](ValueSet-AnurismeStoerrelseSAH.md) | Anurisme stoerrelse [SAH] |
| [Anvendte FISH prober](ValueSet-FISHSamples.md) | Anvendte FISH prober |
| [Anvendte FISH prober 202502](ValueSet-FISHSamples202502.md) | Anvendte FISH prober 202502 - Fjernet udgået udfald og tilføjet nye |
| [Anæstesi - Generel og lokal anæstesi](ValueSet-AnaestesiLokalGenerel.md) | Værdier for generel og lokal anæstesi. |
| [Anæstesi - Generel, lokal og spinal/epidural anæstesi](ValueSet-AnaestesiLokalGenerelSpinalEpidural.md) | Værdier for generel, lokal og spinal/epidural anæstesi. |
| [Anæstesi - Generel, lokalanalgesi og spinal/epidural anæstesi](ValueSet-AnaestesiGenerelSpinalEpiduralLokalanalgesi.md) | Værdier for generel, lokalanalgesi og spinal/epidural anæstesi. |
| [Anæstesi - Regional [DHR]](ValueSet-AnaestesiRegionalDHR.md) | Anæstesi - Regional [DHR] |
| [Anæstesi - Regional, universel, kombineret](ValueSet-AnaestesiRegionalUniverselKombineret.md) | Anæstesi - Regional, universel, kombineret |
| [Anæstesi Type Generel](ValueSet-AnasthesiaTypeGen.md) | Generel Anæstesiydelse - Tillæg |
| [Anæstesi komplikationer](ValueSet-ComplicationAN.md) | Anæstesi komplikationer |
| [Anæstesiform (DUGA)](ValueSet-AnaestesiDUGA.md) | Anæstesiform (DUGA) |
| [Anæstesiydelse](ValueSet-AnasthesiaService.md) | Anæstesiydelse |
| [Artritis (DSR)](ValueSet-ArtritisDSR.md) | Artritis (DSR) |
| [Artrose Placering (DKR)](ValueSet-ArtrosePlaceringDKR.md) | Artrose Placering (DKR) |
| [Artrosefølge (DSR)](ValueSet-ArtrosefoelgeDSR.md) | Artrosefølge (DSR) |
| [Assist devices; Ballon og stent](ValueSet-AssistDevicesBallonStent.md) | Assist devices; Ballon og stent |
| [Banff Classifikation](ValueSet-BanffClassifikation.md) | Banff Classifikation(DNSL) |
| [Begrundelse for kun endoskopisk lokalresektion](ValueSet-BegrundelseEndoskopiskLokalresektioen.md) | Begrundelse for kun endoskopisk lokalresektion |
| [Behandling (CML)](ValueSet-BehandlingCML.md) | Behandling (CML) |
| [Behandling (DHR)](ValueSet-BehandlingDHR.md) | Behandling (DHR) |
| [Behandling af tværsnit](ValueSet-TreatmentCrossSection.md) | Hvilken type af tværsnit behandling blev valg |
| [Behandling: Psykofarmakologisk (RETSPSYK)](ValueSet-BehandlingPsykofarmakologiskRETSPSYK.md) | Behandling: Psykofarmakologisk (RETSPSYK) |
| [Behandling; Endovaskulære behandlinger](ValueSet-BehandlingEndovaskulaerType.md) | Behandling; Endovaskulære behandlinger |
| [Behandling; Udfald for at angive om det er en tilstrækkelig behandling](ValueSet-BehandlingTilstraekkelig.md) | Behandling; Udfald for at angive om det er en tilstrækkelig behandling |
| [Behandling; kirurgisk og endovaskulær](ValueSet-BehandlingKirurgiskEndovaskulaer.md) | Behandling; kirurgisk og endovaskulær |
| [Behandlinger foretaget i forbindelse med CMML (MDS)](ValueSet-BehandlingCMMLMDS.md) | Behandlinger foretaget i forbindelse med CMML (MDS) |
| [Behandlinger foretaget i forbindelse med MDS (MDS)](ValueSet-BehandlingMDS.md) | Behandlinger foretaget i forbindelse med MDS (MDS) |
| [Behandlingsindikation (KAR)](ValueSet-BehandlingsindikationKAR.md) | Behandlingsindikation (KAR) |
| [Behandlingsintention](ValueSet-Behandlingsintention.md) | Behandlingsintention |
| [Behandlingsmetode MRD](ValueSet-TreatmentMethodMRD.md) | Anvendt behandlingsmetode MRD [DAMYDA] |
| [Behandlingsplan](ValueSet-TreatmentRegimen.md) | Behandlingsplan som beskriver specifikke codsering og planlægningen af behandling |
| [Behandlingsrespons CML](ValueSet-BehandlingsresponsCML.md) | Vurdering af behandlingsrespons CML |
| [Behandlingsttype - Stamcellestøtte (LYFO)](ValueSet-BehandlingsTypeStamcellestoetteLYFO.md) | Behandlingsttype - Stamcellestøtte (LYFO) |
| [Behandlingstyper](ValueSet-TreatmentTypeOncology.md) | Hvilken behandlingstype blev der valgt |
| [Behandlingsvarighed](ValueSet-BehandlingsVarighedDHR.md) | Behandlingsvarighed [DHR] |
| [Benlængde (DHR)](ValueSet-BenlaengdeDHR.md) | Benlængde (DHR) |
| [Bilateral / Unilateral](ValueSet-BilateralUnilateral.md) | Bilateral / Unilateral |
| [BinetStagingSystem](ValueSet-BinetStagingSystem.md) | Binet staging system for Chroniz Lymphocytic Leukemia |
| [Blodfortyndende medicin - Aktuelt brug](ValueSet-BlodfortyndendeMedicin.md) | Blodfortyndende medicin - Aktuelt brug |
| [Blodsygdomme](ValueSet-HematologicalDiseases.md) | Blodsygdomme |
| [Blødningsprofylakse (DHR)](ValueSet-BloedningsprofylakseDHR.md) | Blødningsprofylakse (DHR) |
| [Boligforhold (RETSPSYK)](ValueSet-BoligforholdRETSPSYK.md) | Boligforhold (RETSPSYK) |
| [Boligform](ValueSet-Boligform.md) | Patientens boligform |
| [Boligform [DAP]](ValueSet-BoligformDAP.md) | Boligform for Apopleksi [DAP] |
| [Brusklæsion, areal (DKRR)](ValueSet-BrusklaesionArealDKRR.md) | Brusklæsion, areal (DKRR) |
| [Brusklæsion, behandling (DKRR)](ValueSet-BrusklaesionBehandlingDKRR.md) | Brusklæsion, behandling (DKRR) |
| [BulkingMateriale (DUGA)](ValueSet-BulkingMaterialeDUGA.md) | BulkingMateriale (DUGA) |
| [CALR variant](ValueSet-CALRvariant.md) | CALR variant |
| [Cancer udredning](ValueSet-CancerUdredning.md) | Valgmulighederne for cancer udredning |
| [Cancertype DCCG](ValueSet-CancertypeDCCG.md) | Cancertype DCCG |
| [Caput Diameter - (DHR)](ValueSet-CaputDiameterDHR.md) | Caput Diameter - (DHR) |
| [Caput modulær type - (DHR)](ValueSet-CaputModulaerTypeDHR.md) | Caput modulær type - (DHR) |
| [Caput type - (DHR)](ValueSet-CaputTypeDHR.md) | Caput type - (DHR) |
| [Caputnekrose (DSR)](ValueSet-CaputnekroseDSR.md) | Caputnekrose (DSR) |
| [Cement (DKR)](ValueSet-CementDKR.md) | Cement (DKR) |
| [Cement - femur, tibia og patella (DKR)](ValueSet-CementFemurTibiaPatellaDKR.md) | Cement - femur, tibia og patella (DKR) |
| [Cement - hofte (DHR)](ValueSet-CementHofteDHR.md) | Cement - hofte (DHR) |
| [Cement blandesystem (DHR)](ValueSet-CementBlandesystemDHR.md) | Cement blandesystem (DHR) |
| [Central blokade score](ValueSet-ScoreCentralBlock.md) | Regional score ved central nerveblokade |
| [Civilstand [DAP]](ValueSet-CivilstandDAP.md) | Civilstand for Apopleksi [DAP] |
| [Civilstatus (RETSPSYK)](ValueSet-CivilstatusRETSPSYK.md) | Civilstatus (RETSPSYK) |
| [Clavien komplikationsgrad](ValueSet-ClavienKomplikationsgrad.md) | Clavien komplikationsgrad |
| [Clavien komplikationsgrad DCCG](ValueSet-ClavienKomplikationsgradDCCG.md) | Clavien komplikationsgrad DCCG |
| [Clavien komplikationsgrad lang DCCG](ValueSet-ClavienKomplikationsgradLangDCCG.md) | Clavien komplikationsgrad lang DCCG |
| [Cyclus længde](ValueSet-Cyclus.md) | Cyclus længde |
| [Cytogenetic Examination](ValueSet-CytogeneticExamination.md) | Hvilke cytogenetiske forandringer er undersøgt - DMPN |
| [Cytogenetic resultater](ValueSet-CytogeneticResult.md) | Cytogenetiske positive fund - DMPN. Valueset erstattes af nyt fra Okt. 2024 |
| [Cytogenetic resultater 202410](ValueSet-CytogeneticResult202410.md) | Cytogenetiske positive fund - DMPN. Valueset erstatter tidligere pr. Okt. 2024 |
| [Cytogenetisk risiki Grimwade 2010](ValueSet-CytogeneticRiskGrimwade2010.md) | Cytogenetiske risiko vurdering i henhold til Grimwade 2010 kriterier |
| [Cytogenetisk risiki Grimwade 2010 [DAMYDA]](ValueSet-CytogeneticRiskGrimwade2010DAMYDA.md) | Cytogenetiske risiko vurdering i henhold til Grimwade 2010 kriterier [DAMYDA] |
| [Cytogenetiske forandringer](ValueSet-CytogeneticChanges.md) | Cytogenetiske forandringer |
| [Cytogenetiske kræft forandringer](ValueSet-CytogeneticCancerChangesALD.md) | Cytogenetiske WHO specifikke recurrente forandringer i forhold til kræft [ALD] |
| [Cytogenetiske risici](ValueSet-CytogeneticRisk.md) | Cytogenetiske fund / risiko vudering |
| [Cytopeni](ValueSet-Cytopeni.md) | Cytopeni |
| [DEGC MDT beslutning](ValueSet-DegcMDTBeslutning.md) | DEGC MDT beslutning |
| [DHD eksklusionskriterie](ValueSet-DHDeksklusionskriterie.md) | Patienten skal ikke indberettes til DHD, fordi patienten opfylder et af følgende eksklusionskriterier |
| [DVT profylakse, dosis (DKRR)](ValueSet-DVTProfylakseDosisDKRR.md) | DVT profylakse, dosis (DKRR) |
| [Dansk national biobank](ValueSet-BiobankSamples.md) | Dansk national biobank - Samples og matrialer |
| [Databaser i HÆMA](ValueSet-DatabasesHAEMA.md) | Databaser i HÆMA |
| [Detection Method C/R](ValueSet-DetectionMethodCR.md) | Detection Method Clinical/Radiological |
| [Diagnose (CLL)](ValueSet-DiagnoseCLL.md) | Diagnose (CLL) |
| [Diagnose (DANDEM)](ValueSet-DiagnoseDANDEM.md) | Diagnose (DANDEM) |
| [Diagnose DMPN](ValueSet-DiagnoseDMPN.md) | Uspecificerede diagnoser - DMPN |
| [Diagnose DMPN opfølgning](ValueSet-DiagnoseDMPNopfoelgning.md) | Uspecificerede diagnoser - DMPN opfølgning |
| [Diagnosegruppe (HAEMA)](ValueSet-DiagnosegruppeHAEMA.md) | Diagnosegruppe (HAEMA) |
| [Diagnosetype - DPD](ValueSet-DiagnosetypeDPD.md) | Diagnosetype - DPD |
| [Dialyseadgang ved første dialyse (DNSL)](ValueSet-DialyseadgangDNSL.md) | Dialyseadgang ved første dialyse |
| [Dialyseopstart (DNSL)](ValueSet-DialyseOpstartDNSL.md) | Dialyseopstart ved første dialyse (DNSL) |
| [Disease Stage](ValueSet-Sygdomsfase.md) | Sygdomsfase |
| [Doed lokation](ValueSet-DoedLokation.md) | Hvor døde patienten |
| [Doedsaarsag [CLL]](ValueSet-DoedsaarsagCLL.md) | Dødsårsag [CLL] |
| [Dom - Afslutning (RETSPSYK)](ValueSet-DomAfslutningRETSPSYK.md) | Dom - Afslutning (RETSPSYK) |
| [Dom - Anbefaling (RETSPSYK)](ValueSet-DomAnbefalingRETSPSYK.md) | Dom - Anbefaling (RETSPSYK) |
| [Dom - Anbringelse (RETSPSYK)](ValueSet-DomAnbringelseRETSPSYK.md) | Dom - Anbringelse (RETSPSYK) |
| [Dom - Behandling (RETSPSYK)](ValueSet-DomBehandlingRETSPSYK.md) | Dom - Behandling (RETSPSYK) |
| [Dom - Behandling, ambulant (RETSPSYK)](ValueSet-DomBehandlingAmbulantRETSPSYK.md) | Dom - Behandling, ambulant (RETSPSYK) |
| [Dom - Foranstaltningstype (RETSPSYK)](ValueSet-DomForanstaltningstypeRETSPSYK.md) | Dom - Foranstaltningstype (RETSPSYK) |
| [Dom - Ophævelse, årsag (RETSPSYK)](ValueSet-DomOphaevelseAarsagRETSPSYK.md) | Dom - Ophævelse, årsag (RETSPSYK) |
| [Dom - Pausering, årsag (RETSPSYK)](ValueSet-DomPauseringAarsagRETSPSYK.md) | Dom - Pausering, årsag (RETSPSYK) |
| [Dom - Tidligere (RETSPSYK)](ValueSet-DomTidligereRETSPSYK.md) | Dom - Tidligere (RETSPSYK) |
| [Dom - Ændring/pausering (RETSPSYK)](ValueSet-DomAendringPauseringRETSPSYK.md) | Dom - Ændring/pausering (RETSPSYK) |
| [Dosis AK behandling (DKR)](ValueSet-DosisAKbehDKR.md) | Døgndosis AK behandling (DKR) |
| [Dødsårsag (LYFO)](ValueSet-DoedsaarsagLYFO.md) | Dødsårsag (LYFO) |
| [Dødsårsager [ALD]](ValueSet-DoedsaarsagALD.md) | Dødsårsager [ALD] |
| [Dødsårsager [DAMYDA]](ValueSet-DoedsaarsagDAMYDA.md) | Dødsårsager [DAMYDA] |
| [Dødsårsager [SAH]](ValueSet-DoedsaarsagSAH.md) | Dødsårsager [SAH] |
| [ECOG Performance Status Scale](ValueSet-ECOG.md) | Valueset for ECOG skalaen |
| [ECOG Performance Status Skala til HÆMA specialerne](ValueSet-ECOGHAEMA.md) | Denne ECOG er specifik udarbejdet til HÆMA specialerne |
| [EDTA koder Hæmodialyse (DNSL)](ValueSet-EDTAHaemodialyseDNSL.md) | EDTA koder Hæmodialyse (DNSL) |
| [EDTA koder Peritonedialyse (DNSL)](ValueSet-EDTAPeritonedialyseDNSL.md) | EDTA koder Peritonedialyse (DNSL) |
| [EDTA koder Transplantation (DNSL)](ValueSet-EDTATransplantationDNSL.md) | EDTA koder Transplantation (DNSL) |
| [EHS ventral hernie - lateral](ValueSet-EHSVentralHernieLateral.md) | EHS ventral hernie - lateral |
| [EHS ventral hernie - midtlinie](ValueSet-EHSVentralHernieMidtlinie.md) | EHS ventral hernie - midtlinie |
| [EHS ventral hernie - samlet](ValueSet-EHSVentralHernieSamlet.md) | EHS ventral hernie - lateral fordelt på højre/venstre og kombineret med midtlinje |
| [EHS ventral hernie type](ValueSet-EHSVentralHernieType.md) | EHS ventral hernie type - lateral højre/venstre og midtlinje |
| [EORTC Grad 1-4 (DPD)](ValueSet-EORTC14DPD.md) | EORTC Grad 1-4 - Helbredsvurdering (DPD) |
| [EORTC Grad 1-7 (DPD)](ValueSet-EORTC17DPD.md) | EORTC Grad 1-7 - Livskvalitetssvurdering (DPD) |
| [EORTC Grad 1-7 (DUGA)](ValueSet-EORTC17DUGA.md) | EORTC Grad 1-7 - Livskvalitetssvurdering (DUGA) |
| [EORTC Grad 2-4 (DPD)](ValueSet-EORTC24DPD.md) | EORTC Grad 2-4 - Helbredsvurdering (DPD) |
| [EORTC skema mangler](ValueSet-ManglendeEORTC.md) | Årsag til manglende EORTC skema |
| [ERA PRD Codes](ValueSet-PRDcodes.md) | European Renal Association (ERA) Primary Renal Disease (PRD) |
| [Ekstra behandling](ValueSet-ExtraordinaryTreatmenCause.md) | Årsag for uplanlagt ekstra behandling [DAMYDA] |
| [Ekstramedullær sygdom](ValueSet-SKSExtraModularDisease.md) | Ekstramedullær sygdom |
| [Erklæring (RETSPSYK)](ValueSet-ErklaeringRETSPSYK.md) | Erklæring (RETSPSYK) |
| [FISH plasma identifikation](ValueSet-FISHProcedure.md) | FISH plasma identifikation |
| [Faggruppe](ValueSet-Faggruppe.md) | Hvilken faggruppe er involveret i en given hændelse |
| [FagligtNiveau - DAD](ValueSet-Competence.md) | Fagligt niveau for udførende anæstesi personale |
| [Femur knogletab klassifikation (DHR)](ValueSet-FemurKnogletabKlassifikationDHR.md) | Femur knogletab klassifikation (DHR) |
| [Fiksation - cementeret/ucementeret](ValueSet-FiksationCementeretUcementeret.md) | Fiksation - cementeret/ucementeret |
| [Fiksation - cementeret/ucementeret/andet](ValueSet-FiksationCementeretUcementeretAndet.md) | Fiksation - cementeret/ucementeret/andet |
| [Fiksation - cementeret/ucementeret/hybrid](ValueSet-FiksationCementeretUcementeretHybrid.md) | Fiksation - cementeret/ucementeret/hybrid |
| [Fiksation, Femur (DKRR)](ValueSet-FiksationFemurDKRR.md) | Fiksation, Femur (DKRR) |
| [Fiksation, Femur (DKRR) 2025](ValueSet-FiksationFemurDKRR202503.md) | Fiksation, Femur (DKRR) 2025 rettelse |
| [Fiksation, Tibia (DKRR)](ValueSet-FiksationTibiaDKRR.md) | Fiksation, Tibia (DKRR) |
| [Fisher grad for SAH](ValueSet-FisherGrad.md) | Fisher grad for SAH |
| [Foerste kontakt](ValueSet-KontaktType1.md) | Første kontakt type til behandling |
| [Foerste kontakt sted](ValueSet-KontaktSted.md) | Sted for første kontakt |
| [Forsørgelsesgrundlag (RETSPSYK)](ValueSet-ForsoergelsesgrundlagRETSPSYK.md) | Forsørgelsesgrundlag (RETSPSYK) |
| [Fraktur; friskhed (DSR)](ValueSet-FrakturFriskhedDSR.md) | Fraktur; friskhed (DSR) |
| [Fravalg af antikoagulationsbehandling; årsag](ValueSet-AKFravalgt.md) | Årsagen til hvorfor antikoagulationsbehandling er fravalgt |
| [Frekvens Nedsynkning (DUGA)](ValueSet-FrekvensNedsynkningDUGA.md) | Hvor ofte konstateres nedsynkning (DUGA) |
| [Frekvens læk (DUGA)](ValueSet-FrekvensLaekDUGA.md) | Hvor ofte lækkes urin (DUGA) |
| [Funktion test ADL (DANDEM)](ValueSet-FunktionTestADLDANDEM.md) | Funktion test ADL (DANDEM) |
| [Funktionsgruppe (DKR)](ValueSet-FunktionsgruppeDKR.md) | Funktionsgruppe (DHR) |
| [Funktionsgruppe [DHR]](ValueSet-FunktionsgruppeDHR.md) | Funktionsgruppe [DHR] |
| [Fødselssted (RETSPSYK)](ValueSet-FoedselsstedRETSPSYK.md) | Fødselssted (RETSPSYK) |
| [Genoplivning](ValueSet-Genoplivning.md) | Aktivitet ifm genoplivning |
| [Genoplivning indstillet - årsag](ValueSet-GenoplivStoppet.md) | Årsager til indstilling af genoplivningsforsøg |
| [Glenoidalkomponent - ikke indsat (DSR)](ValueSet-GlenoidalkomponentIkkeIndsatDSR.md) | Glenoidalkomponent - ikke indsat (DSR) |
| [Glenoidalkomponent - supplerende (DSR)](ValueSet-GlenoidalkomponentSupplerendeDSR.md) | Glenoidalkomponent - supplerende (DSR) |
| [Grad af akut (DHDB)](ValueSet-GradAkutDHDB.md) | Grad af akut (DHDB) |
| [Graden af aflukning af anurisme](ValueSet-AnurismeAflukning.md) | Graden af aflukning af anurisme |
| [Gradering](ValueSet-ResttumorGradering.md) | Gradering hvis der er fundet nogen resttumor |
| [Graft (DKRR)](ValueSet-GraftDKRR.md) | Graft (DKRR) |
| [Graft, ACL (DKRR)](ValueSet-GraftACLDKRR.md) | Graft, ACL (DKRR) |
| [Grund til manglende behandling](ValueSet-ManglendeBehandling.md) | Årsag til manglende behandling |
| [Grundlidelse (DKR)](ValueSet-GrundlidelseDKR.md) | Grundlidelse (DKR) |
| [Grundlidelse (DSR)](ValueSet-GrundlidelseDSR.md) | Grundlidelse (DSR) |
| [Grundlidelse [DHR]](ValueSet-GrundlidelseDHR.md) | Grundlidelse [DHR] |
| [Gynækologisk undersøgelsesmetode (DUGA)](ValueSet-GynUndersoegDUGA.md) | Gynækologisk undersøgelsesmetode (DUGA) |
| [HGBTransfusion4](ValueSet-HaemoglobinTransf4.md) | Hæmoglobinværdi før blodtransfusion - 4 valg |
| [Harris Hip Score - Gangafvikling](ValueSet-HarrisHipScoreGangafvikling.md) | Harris Hip Score - Gangafvikling |
| [Harris Hip Score - Gangdistance](ValueSet-HarrisHipScoreGangdistance.md) | Harris Hip Score - Gangdistance |
| [Harris Hip Score - Hjælpemidler](ValueSet-HarrisHipScoreHjaelpemidler.md) | Harris Hip Score - Hjælpemidler |
| [Harris Hip Score - Offentlig transport](ValueSet-HarrisHipScoreOffentligTransport.md) | Harris Hip Score - Offentlig transport |
| [Harris Hip Score - Siddefunktion](ValueSet-HarrisHipScoreSiddefunktion.md) | Harris Hip Score - Siddefunktion |
| [Harris Hip Score - Sko og strømer](ValueSet-HarrisHipScoreSkoStroemper.md) | Harris Hip Score - Sko og strømer |
| [Harris Hip Score - Smerter](ValueSet-HarrisHipScoreSmerter.md) | Harris Hip Score - Smerter |
| [Harris Hip Score - Trappegang](ValueSet-HarrisHipScoreTrappegang.md) | Harris Hip Score - Trappegang |
| [Hemialloplastik undertyper (femurkomponent)](ValueSet-HemialloplastikFemur.md) | Hemialloplastik undertyper (femurkomponent) |
| [Henvist fra](ValueSet-HenvistFra.md) | Hvor er patienten blevet henvist fra |
| [Hernie størrelse](ValueSet-HernieStoerrelse.md) | Hernie størrelse |
| [Hjerneødem (DAP)](ValueSet-HjerneoedemDAP.md) | Hjerneødem fundet i forbindelse med billeddiagnostisk undersøgelse (DAP) |
| [Hjerterytme](ValueSet-HeartRhythm.md) | Hjerterytme |
| [Hjerterytme](ValueSet-Hjerterytme.md) | Analyse af hjerterytme |
| [Hjerterytme - første obs](ValueSet-Rytme1Obs.md) | Første observerede hjerterytme |
| [Hjertestop type](ValueSet-HeartAttackTypes.md) | Forskellige arter af hjertestop / fejl |
| [Hjertestop Årsag](ValueSet-HjertestopAarsag.md) | Årsag til hjertestop |
| [Humeruskomponent (DSR)](ValueSet-HumeruskomponentDSR.md) | Humeruskomponent (DSR) |
| [Hunt-Hess score](ValueSet-HuntHessClassification.md) | Hunt-Hess score ud fra klassifikationen. |
| [Hvorfor er patienten ikke involveret](ValueSet-ClinicalProtocolNotParticipated.md) | Hvorfor er patienten ikke involveret |
| [Hyppighed](ValueSet-Hyppighed.md) | Opfølgning efter 2 eller 5 år |
| [Håndtering af lipom (DHDB)](ValueSet-LipomHandlingDHDB.md) | Håndtering af lipom (DHDB) |
| [ICD 10 cancer koder til DPD](ValueSet-IDC10DPDCancer.md) | ICD 10 cancer koder til DPD |
| [ICD 10 koder til DPD](ValueSet-IDC10DPD.md) | ICD 10 koder til DPD |
| [ICD 10 non-cancer koder til DPD](ValueSet-IDC10DPDNonCancer.md) | ICD 10 non-cancer koder til DPD |
| [ICRS graduering 1-4](ValueSet-ICRSGraduering14.md) | ICRS graduering 1-4 |
| [IPSS-R - Cytogenetisk risiko-score](ValueSet-IPSSRCytogenetiskRisiko.md) | IPSS-R - Cytogenetisk risiko-score |
| [Ikke besvaret (MDS)](ValueSet-IkkeBesvaret.md) | Årsager til ikke-besvaret spørgsmål (MDS) |
| [Ikke udført](ValueSet-IkkeUdfoert.md) | Ikke udført. |
| [Imaging](ValueSet-Imaging.md) | Imaging |
| [Imaging Angio](ValueSet-ImagingAngio.md) | Imaging Angio |
| [Immunoterapi](ValueSet-Immunoterapi.md) | Immunoterapi |
| [Implantat - anatomisk design](ValueSet-ImplantatAnatomiskDesign.md) | Implantat - anatomisk design |
| [Implantat - anatomisk/reverse](ValueSet-ImplantatAnatomiskReverse.md) | Implantat - anatomisk/reverse |
| [Implantat - anatomisk: offset](ValueSet-ImplantatAnatomiskOffset.md) | Implantat - anatomisk: offset |
| [Implantat - materiale (DSR)](ValueSet-ImplantatMaterialeDSR.md) | Implantat - materiale (DSR) |
| [Implantat - materiale (keramik, metal, andet)](ValueSet-ImplantatMaterialeKeramikMetalAndet.md) | Implantat - materiale (keramik, metal, andet) |
| [Implantat - materiale (polyethylen, keramik, metal)](ValueSet-ImplantatMaterialePolyethylenKeramikMetal.md) | Implantat - materiale (polyethylen, keramik, metal) |
| [Implantat - reverse design](ValueSet-ImplantatReverseDesign.md) | Implantat - reverse design |
| [Implantattype (DUGA)](ValueSet-ImplantattypeDUGA.md) | Implantattype (DUGA) |
| [Incisionsvalg](ValueSet-Incisionsvalg.md) | Incisionsvalg for kræft databaser (DEGC) |
| [Indgreb - Components Separation (DHDB)](ValueSet-IndgrebComponentsSeparationDHDB.md) | Indgreb - Components Separation (DHDB) |
| [Indgreb - Components Separation, type (DHDB)](ValueSet-IndgrebComponentsSeparationTypeDHDB.md) | Indgreb - Components Separation, type (DHDB) |
| [Indgreb - femoalhernie (DHDB)](ValueSet-IndgrebFemoralhernieDHDB.md) | Indgreb - femoalhernie (DHDB) |
| [Indgreb - hvad gøres hvis en nerve er set](ValueSet-IndgrebNerveSet.md) | Indgreb - hvad gøres hvis en nerve er set |
| [Indgreb - ingvinalhernie (DHDB)](ValueSet-IndgrebIngvinalhernieDHDB.md) | Indgreb - ingvinalhernie (DHDB) |
| [Indgreb - ventralhernie (DHDB)](ValueSet-IndgrebVentralhernieDHDB.md) | Indgreb - ventralhernie (DHDB) |
| [Indgreb - ventralhernie anden minimal indgreb (DHDB)](ValueSet-IndgrebVentralhernieAndenDHDB.md) | Indgreb - ventralhernie anden minimal indgreb (DHDB) |
| [Indgreb, laparoskopisk - ingvinalhernie (DHDB)](ValueSet-IndgrebLaparoskopiskDHDB.md) | Indgreb, laparoskopisk - ingvinalhernie (DHDB) |
| [Indgreb, åben mesh - ingvinalhernie (DHDB)](ValueSet-IndgrebAabenMeshIngvinalhernieDHDB.md) | Indgreb, åben mesh - ingvinalhernie (DHDB) |
| [Indgreb, åben uden mesh - ingvinalhernie (DHDB)](ValueSet-IndgrebAabenIngvinalhernieDHDB.md) | Indgreb, åben uden mesh - ingvinalhernie (DHDB) |
| [Indikation for TES](ValueSet-IndikationTES.md) | Indikation for TES |
| [Indsat / fjernet](ValueSet-IndsatFjernet.md) | Indsat / fjernet |
| [Indsat / ikke indsat](ValueSet-IndsatIkkeIndsat.md) | Indsat / ikke indsat |
| [Ingen (enkelt udfald)](ValueSet-Ingen.md) | Giver mulighed for at svare ingen |
| [Ingen Behandling(enkelt udfald)](ValueSet-IngenBehandling.md) | Giver mulighed for at svare ingen behandling |
| [Ingvinalhernie specificering](ValueSet-IngvinalhernieSpecificering.md) | Ingvinalhernie specificering |
| [InitialRespons](ValueSet-InitialRespons.md) | InitialRespons |
| [Interventionsforløb](ValueSet-Interventionsforloeb.md) | Interventionsforløb |
| [Interventionsgruppe Hæmodialyse (DNSL)](ValueSet-InterventionsgruppeDialyseHaemoDNSL.md) | Interventionsgruppe Hæmodialyse (DNSL) |
| [Interventionsgruppe Peritonealdialyse (DNSL)](ValueSet-InterventionsgruppeDialysePeritonealDNSL.md) | Interventionsgruppe Peritonealdialyse (DNSL) |
| [Interventionsgruppe Transplantation (DNSL)](ValueSet-InterventionsgruppeTransplantDNSL.md) | Interventionsgruppe Transplantation (DNSL) |
| [Interventionsgruppe Transplantation Excl (DNSL)](ValueSet-InterventionsgruppeTransplantExclDNSL.md) | Interventionsgruppe Transplantation eksklusiv transplantation udfaldet (DNSL) |
| [Intraoperative læsioner - Kvinder (DCCG)](ValueSet-IntraoperativeLaesionerKDCCG.md) | Intraoperative læsioner - Kvinder (DCCG) |
| [Intraoperative læsioner - Mænd (DCCG)](ValueSet-IntraoperativeLaesionerMDCCG.md) | Intraoperative læsioner - Mænd (DCCG) |
| [Intubation](ValueSet-Intubation.md) | Resultat af luftvejshåndtering vha. intubation |
| [Ja (enkelt udfald)](ValueSet-JaEnkeltUdfald.md) | Ja (enkelt udfald) |
| [Ja / Nej](ValueSet-JaNej.md) | Muligheden for kun ja og nej |
| [Ja / Nej / Betinget](ValueSet-JaNejBetinget.md) | Giver mulighed for at svare betinget til et spurgt spørgsmål |
| [Ja / Nej / Ikke faglig relevant](ValueSet-JaNejIkkefagligrelevant.md) | Dækker over Ja/nej/ikke faglig relevant. |
| [Ja / Nej / Ikke indiceret](ValueSet-JaNejIkkeindiceret.md) | Muligheden for ja, nej og ikke indiceret |
| [Ja / Nej / Ikke målt](ValueSet-JaNejEjMaalt.md) | Giver mulighed for et 'ikke-målt' svar |
| [Ja / Nej / Ikke relevant](ValueSet-JaNejIkkerelevant.md) | Dækker over Ja/nej/ikke relevant. |
| [Ja / Nej / Ikke spurgt](ValueSet-JaNejIkkeSpurgt.md) | Muligheden for ja, nej og ikke spurgt |
| [Ja / Nej / Ikke udført](ValueSet-JaNejIkkeUdfoert.md) | Dækker over Ja/nej/ikke udført. |
| [Ja / Nej / Kan ikke afgøres](ValueSet-JaNejKanIkkeAfgoeres.md) | Undersøgt men resultat ikke entydigt / ukendt |
| [Ja / Nej / Ukendt](ValueSet-JaNejUkendt.md) | Giver mulighed for at svare ukendt til et spurgt spørgsmål |
| [Ja / Nej / Ukendt / Ikke relevant](ValueSet-JaNejUkendtIkkerelevant.md) | Giver mulighed for at svare ukendt eller ikke relevant til et spurgt spørgsmål |
| [Ja / Nej / Uvist](ValueSet-JaNejUvist.md) | Giver mulighed for et 'måske'-svar |
| [Ja / Nej / Uvist / Ikke udført](ValueSet-JaNejUvistIkkeudfoert.md) | Dækker over Ja/nej/Uvist/ikke udført. |
| [Ja / Nej / Uvist / Ukendt](ValueSet-JaNejUvistUkendt.md) | Giver mulighed for både måske og et ikke spurgt spørgsmål |
| [Ja / Nej / Uvist / Ukendt / Relevant](ValueSet-JaNejUvistUkendtIkkeRelevant.md) | Giver mulighed for både måske og et ikke spurgt spørgsmål |
| [KAG vurdering](ValueSet-CoronaryArteryGraph.md) | Skal patienten få et KAG |
| [Kellgren-Lawrence Klassifikation (DKR)](ValueSet-KellgrenLawsonKlassifikation.md) | Kellgren-Lawrence Klassifikation (DKR) |
| [Kemoterapi](ValueSet-Chemotherapy.md) | Hvilken art kemoterapi |
| [Kemoterapiregime](ValueSet-Kemoterapiregime.md) | Kemoterapiregime (blanding af ATC, SKS og uspecifikke koder) |
| [Killip sværhedsgrad](ValueSet-HeartFailure.md) | Killip sværhedsgrad af hjertestop |
| [Kirurgisk adgang (DSR)](ValueSet-KirurgiskAdgangDSR.md) | Kirurgisk adgang (DSR) |
| [Klinisk M-kategori DCCG](ValueSet-MKategoriDCCG.md) | Klinisk M-kategori DCCG |
| [Klinisk N-kategori DCCG](ValueSet-NKategoriDCCG.md) | Klinisk N-kategori DCCG |
| [Klinisk T-kategori DCCG](ValueSet-TKategoriDCCG.md) | Klinisk T-kategori DCCG |
| [Kliniske protokolleret koder](ValueSet-ClinicalProtocolCodes.md) | Kode til en klinisk protokolleret undersøgelse |
| [Kliniske protokolleret koder 1](ValueSet-ClinicalProtocolCodes1.md) | Kode til en klinisk protokolleret undersøgelse |
| [Kliniske symptomer (DCCG)](ValueSet-KliniskeSymptomerDCCG.md) | Kliniske symptomer (DCCG) |
| [Knogle forandringer](ValueSet-RadiologicalBoneChanges.md) | Radiologiske knogleforandringer |
| [Knogle forandringer 202412](ValueSet-RadiologicalBoneChanges202412.md) | Radiologiske knogleforandringer |
| [Knoglegraft (DSR)](ValueSet-KnoglegraftDSR.md) | Knoglegraft (DSR) |
| [Knogletransplantation (DHR)](ValueSet-KnogletransplantationDHR.md) | Knogletransplantation acetabulum/femur (DHR) |
| [Knæ løshed (posterolateral)](ValueSet-KnaeLoeshedPosterolateral.md) | Knæ løshed (posterolateral) |
| [Knæ løshed gradering](ValueSet-KnaeLoeshedGradering.md) | Knæ løshed gradering |
| [Knæakse (DKR)](ValueSet-KnaeakseDKR.md) | Knæakse (DKR) |
| [Kognitiv påvirkning (DANDEM)](ValueSet-KognitivPaavirkningDANDEM.md) | Kognitiv påvirkning (DANDEM) |
| [Kognitiv test (DANDEM)](ValueSet-KognitivTestDANDEM.md) | Kognitiv test (DANDEM) |
| [Komplikationer (DKRR)](ValueSet-KomplikationerDKRR.md) | Komplikationer (DKRR) |
| [Komplikationer Vaskulær DMPN](ValueSet-KomplikationerVaskulaerDMPN.md) | Typer af komplikationer ved vaskulære events - DMPN |
| [Komplikationer pga. 'Andre' - Diagnosekoder (DUGA)](ValueSet-KomplAndreDiagDUGA.md) | Komplikationer pga. 'Andre' - Diagnosekoder (DUGA) |
| [Komplikationer pga. 'Andre' - Procedurekoder (DUGA)](ValueSet-KomplAndreProcDUGA.md) | Komplikationer pga. 'Andre' - Procedurekoder (DUGA) |
| [Komplikationer pga. blæretømningsbesvær - Diagnosekoder (DUGA)](ValueSet-KomplBlaereDiagDUGA.md) | Komplikationer pga. blæretømningsbesvær - Diagnosekoder (DUGA) |
| [Komplikationer pga. blæretømningsbesvær - Procedurekoder (DUGA)](ValueSet-KomplBlaereProcDUGA.md) | Komplikationer pga. blæretømningsbesvær - Procedurekoder (DUGA) |
| [Komplikationer pga. blødning - Diagnosekoder (DUGA)](ValueSet-KomplBloedDiagDUGA.md) | Komplikationer pga. blødning - Diagnosekoder (DUGA) |
| [Komplikationer pga. blødning - Procedurekoder (DUGA)](ValueSet-KomplBloedProcDUGA.md) | Komplikationer pga. blødning - Procedurekoder (DUGA) |
| [Komplikationer pga. infektion eller erosion - Diagnosekoder (DUGA)](ValueSet-KomplInfektionDiagDUGA.md) | Komplikationer pga. infektion eller erosion - Diagnosekoder (DUGA) |
| [Komplikationer pga. infektion eller erosion - Procedurekoder (DUGA)](ValueSet-KomplInfektionProcDUGA.md) | Komplikationer pga. infektion eller erosion - Procedurekoder (DUGA) |
| [Komplikationer pga. organperforation - Diagnosekoder (DUGA)](ValueSet-KomplOrganperfDiagDUGA.md) | Komplikationer pga. organperforation - Diagnosekoder (DUGA) |
| [Komplikationer pga. organperforation - Procedurekoder (DUGA)](ValueSet-KomplOrganperfProcDUGA.md) | Komplikationer pga. organperforation - Procedurekoder (DUGA) |
| [Komplikationer, behandling (DEGC)](ValueSet-KomplikationerBehandlingDEGC.md) | Komplikationer i forhold til DEGC operationer |
| [Komplikationer, endovaskulær [SAH]](ValueSet-KomplikationerEndovaskulaerSAH.md) | Komplikationer i forhold til endovaskulær [SAH] |
| [Komplikationer, kirurgisk [SAH]](ValueSet-KomplikationerKirurgiskSAH.md) | Komplikationer i forhold til kirurgisk [SAH] |
| [Komplikationer, peroperative (DHR)](ValueSet-KomplikationerPeroperativeDHR.md) | Komplikationer, peroperative (DHR) |
| [Komplikationer, peroperative (DKR)](ValueSet-KomplikationerPeroperativeDKR.md) | Komplikationer, peroperative (DKR) |
| [Komponent - acetabulum (DHR)](ValueSet-KomponentAcetabulumDHR.md) | Komponent - acetabulum (DHR) |
| [Komponent - acetabulum, status (DHR)](ValueSet-KomponentAcetabulumStatusDHR.md) | Komponent - acetabulum, status (DHR) |
| [Komponent - femur (DHR)](ValueSet-KomponentFemurDHR.md) | Komponent - femur (DHR) |
| [Komponent - femur (DKR)](ValueSet-KomponentFemurDKR.md) | Komponent - femur (DKR) |
| [Komponent - femur (DKR) 2025](ValueSet-KomponentFemurDKR202503.md) | Komponent - femur (DKR) - Rettelser 2025 |
| [Komponent - femur (DKR) revision](ValueSet-KomponentFemurDKRrevision.md) | Komponent - femur (DKR) revision |
| [Komponent - femur (DKR) revision 2025](ValueSet-KomponentFemurDKRrevision202503.md) | Komponent - femur (DKR) revision - Rettelser 2025 |
| [Komponent - femur, status (DHR)](ValueSet-KomponentFemurStatusDHR.md) | Komponent - femur, status (DHR) |
| [Komponent - femur, status (DKR)](ValueSet-KomponentFemurStatusDKR.md) | Komponent - femur, status (DKR) |
| [Komponent - patella (DKR)](ValueSet-KomponentPatellaDKR.md) | Komponent - patella (DKR) |
| [Komponent - patella (DKR) revision](ValueSet-KomponentPatellaDKRrevision.md) | Komponent - patella (DKR) revision |
| [Komponent - patella materiale (DKR)](ValueSet-KomponentPatellaMaterialeDKR.md) | Komponent - patella materiale (DKR) |
| [Komponent - supplement (DKR)](ValueSet-KomponentSupplementDKR.md) | Komponent - supplement (DKR) |
| [Komponent - tibia (DKR)](ValueSet-KomponentTibiaDKR.md) | Komponent - tibia (DKR) |
| [Komponent - tibia (DKR) 2025](ValueSet-KomponentTibiaDKR202503.md) | Komponent - tibia (DKR) Rettelse 2025 |
| [Komponent - tibia (DKR) revision](ValueSet-KomponentTibiaDKRrevision.md) | Komponent - tibia (DKR) revision |
| [Komponent - tibia (DKR) revision 2025](ValueSet-KomponentTibiaDKRrevision202503.md) | Komponent - tibia (DKR) revision - Rettelse 2025 |
| [Komponent - tibia, status (DKR)](ValueSet-KomponentTibiaStatusDKR.md) | Komponent - tibia, status (DKR) |
| [Komponent type (DKR)](ValueSet-KomponentTypeDKR.md) | Komponent type (DKR) |
| [Komponent type - Huller/Uden huller (DHR)](ValueSet-KomponentTypeHullerUdenhullerDHR.md) | Komponent type - Huller/Uden huller (DHR) |
| [Komponent type - femur (DHR)](ValueSet-KomponentTypeFemurDHR.md) | Komponent type - femur (DHR) |
| [Konference DPD](ValueSet-KonferenceDPD.md) | Tværfaglig konference |
| [Kontakt til patienten](ValueSet-KontaktPatient.md) | Kontakt til patienten |
| [Kontamineringsgrad](ValueSet-Kontamineringsgrad.md) | Kontamineringsgrad |
| [Korsbånd ikke bevaret](ValueSet-KorsbaandEjBevaret.md) | Korsbånd ikke bevaret efter operation |
| [Kromosom par](ValueSet-ChromosomPairs.md) | Kromosom par |
| [Kursusregistrering - årsag](ValueSet-KursusregAarsag.md) | Kursusregistrering - årsag til manglende oplysninger |
| [KvalmeSmerte](ValueSet-SmerteKvalme.md) | Vurdering af patientens smerte- / kvalmetilstand |
| [Køn](ValueSet-Gender.md) | Fhir køn system |
| [Laryngoskopigrad](ValueSet-LaryngoskopiDegree.md) | Bedst opnåede laryngoskopigrad ved direkte laryngoskopi efter Cormack & Lehane |
| [Ledbåndsrekonstruktioner (DKRR)](ValueSet-LedbaandsrekonstruktionDKRR.md) | Ledbåndsrekonstruktioner (DKRR) |
| [Left or right](ValueSet-LeftRight.md) | Left or right position |
| [Leukæmi diagnoser](ValueSet-PatobankSNOMEDLeukemiaDiagnose.md) | Leukæmi diagnoser |
| [Limnavn (DHDB)](ValueSet-LimnavnDHDB.md) | Limnavn (DHDB) |
| [Liner - Crosslinked (DHR)](ValueSet-LinerCrosslinkedDHR.md) | Liner - Crosslinked (DHR) |
| [Liner komponent med Post (DKR)](ValueSet-LinerMedPostDKR.md) | Liner komponent med Post (DKR) |
| [Liner komponent uden Post (DKR)](ValueSet-LinerUdenPostDKR.md) | Liner komponent uden Post (DKR) |
| [Linertype - (DHR)](ValueSet-LinertypeDHR.md) | Linertype - (DHR) |
| [Livstatus](ValueSet-LifeStatus.md) | Status ved udskrivelse |
| [Lokal blødning (DAP)](ValueSet-LokalBloedningDAP.md) | Lokal blødning fundet i forbindelse med billeddiagnostisk undersøgelse (DAP) |
| [Lokalisation](ValueSet-LokalisationEsophagusDEGC.md) | Lokalisation af cancer i esophagus [DEGC] |
| [Lokalitet DANARREST](ValueSet-LokalitetDANARREST.md) | Lokalitet DANARREST |
| [Lokation for tromber, fundet vha. DSA](ValueSet-DSAFundLokation.md) | Lokation for tromber, fundet vha. digital subtraktionsangiografi (DSA). |
| [LuftvejForsøgsplan](ValueSet-LuftvejForsoeg.md) | 1.-6. forsøg på etablering af Luftvejsadgang |
| [Luftvejshåndtering](ValueSet-LuftvejsHaandtering.md) | Anvendte indgreb til luftvejsunderstøttelse |
| [Luftvejsplan](ValueSet-Luftvejsplan.md) | Mulige planlagte indgreb til luftvejsunderstøttelse |
| [Lukning af hud (DHDB)](ValueSet-LukningHudDHDB.md) | Lukning af hud (DHDB) |
| [M komponent (Myeloma protein) type](ValueSet-MComponentTypeLyfo.md) | M komponent (Myeloma protein) type [LYFO] |
| [M-komponent; laboratoriesvar](ValueSet-MKomponentLaboratoriesvar.md) | M-komponent; laboratoriesvar |
| [MDS diagnoser (Patobank SNOMED)](ValueSet-PatobankSNOMEDMDSDiagnose.md) | MDS diagnoser (Patobank SNOMED) |
| [MDT-beslutning ikke fulgt; årsag](ValueSet-MDTIkkeFulgt.md) | Årsagen til hvorfor MDT-beslutning ikke er fuldt |
| [ML-instabilitet (DKR)](ValueSet-MLInstabilitetDKR.md) | ML-instabilitet (DKR) |
| [Manifeste komplikationer](ValueSet-ComplicationsManifestation.md) | Manifeste komplikationer [DAMYDA] |
| [Manifeste komplikationer 202412](ValueSet-ComplicationsManifestation202412.md) | Manifeste komplikationer [DAMYDA] |
| [Medicin administration Type](ValueSet-AdministrationType.md) | Medicin administration Type |
| [Medicin givet ved hjertestop](ValueSet-MedicinDANARREST.md) | Mediciin givet ved behandling i DANARREST specialet |
| [Medicin præparat (DSR)](ValueSet-MedicinPraeparatDSR.md) | Medicin præparat (DSR) |
| [Medicin varighed (DSR)](ValueSet-MedicinVarighedDSR.md) | Medicin varighed (DSR) |
| [Medicinal behandling - Hvornår bliver dette giver i forhold til proceduren/operatioen? [DHR]](ValueSet-MedicinalBehandlingPaabegyndtDHR.md) | Medicinal behandling - Hvornår bliver dette giver i forhold til proceduren/operatioen? [DHR] |
| [Menisklæsion, behandling (DKRR)](ValueSet-MenisklaesionBehandlingDKRR.md) | Menisklæsion, behandling (DKRR) |
| [Menisklæsion, medial/lateral (DKRR)](ValueSet-MenisklaesionMedialLateralDKRR.md) | Menisklæsion, medial/lateral (DKRR) |
| [Menisklæsion, type (DKRR)](ValueSet-MenisklaesionTypeDKRR.md) | Menisklæsion, type (DKRR) |
| [Mesh fiksering (DHDB)](ValueSet-MeshFikseringDHDB.md) | Mesh fiksering (DHDB) |
| [Mesh placering (DHDB)](ValueSet-MeshPlaceringDHDB.md) | Mesh Placering (DHDB) |
| [Mesh teknik (DHDB)](ValueSet-MeshTeknikDHDB.md) | Mesh teknik (DHDB) |
| [Mesh type - Ingvinalhernie (DHDB)](ValueSet-MeshTypeIngvinalhernieDHDB.md) | Mesh type - Ingvinalhernie (DHDB) |
| [Mesh type - Ventralhernie (DHDB)](ValueSet-MeshTypeVentralhernieDHDB.md) | Mesh type - Ventralhernie (DHDB) |
| [Modified Raymond-Roy klassifikation (MRRC)](ValueSet-ModifiedRaymondRoyKlassification.md) | Modified Raymond-Roy klassifikation (MRRC) |
| [Molecular remission (MR)](ValueSet-MolecularRemission.md) | Molekylær remission (MR) |
| [Molekylærbiologiske undersøgelses resultat](ValueSet-MolecurlarBiologyExamination.md) | Molekylærbiologiske undersøgelses resultat eller karyotyp |
| [Mors Diagnosegrupper (DNSL)](ValueSet-MorsDiagnosegrupper.md) | Vurdering af en given behandling |
| [Mors Diagnosekode - Forskelligt (DNSL)](ValueSet-MorsDiagnoseForskelligtDNSL.md) | Mors Diagnosekode - Forskelligt (DNSL) |
| [Mors Diagnosekode - Infektioner (DNSL)](ValueSet-MorsDiagnoseInfektionerDNSL.md) | Mors Diagnosekode - Infektioner (DNSL) |
| [Mors Diagnosekode - Kardial (DNSL)](ValueSet-MorsDiagnoseKardialDNSL.md) | Mors Diagnosekode - Kardiale årsager (DNSL) |
| [Mors Diagnosekode - Lever (DNSL)](ValueSet-MorsDiagnoseLeverDNSL.md) | Mors Diagnosekode - Leverlidelser (DNSL) |
| [Mors Diagnosekode - Socialt (DNSL)](ValueSet-MorsDiagnoseSocialtDNSL.md) | Mors Diagnosekode - Socialt (DNSL) |
| [Mors Diagnosekode - Ulykke (DNSL)](ValueSet-MorsDiagnoseUlykkeDNSL.md) | Mors Diagnosekode - Ulykke (DNSL) |
| [Mors Diagnosekode - Vaskulær (DNSL)](ValueSet-MorsDiagnoseVaskulaerDNSL.md) | Mors Diagnosekode - Vaskulære årsager (DNSL) |
| [Mulig-Vanskelig-Umulig](ValueSet-MuligVanskeligUmulig.md) | Vurdering af en given behandling |
| [Måleenhed HÆMA-2](ValueSet-MaaleEnhedHAEMA2.md) | Måleenheder HÆMA - udfaldsrum med 2 enheder |
| [Måleenhed HÆMA-3](ValueSet-MaaleEnhedHAEMA3.md) | Måleenheder HÆMA - udfaldsrum med 3 enheder |
| [Måleudstyr (DKRR)](ValueSet-MaaleudstyrDKRR.md) | Måleudstyr (DKRR) |
| [Måling, calcium](ValueSet-MaalingCalcium.md) | Måling, calcium |
| [Mængder](ValueSet-Maengder.md) | Angivelse af mængder |
| [NIHSS - 10. Dysartri](ValueSet-NIHSS10Dysartri.md) | The National Institute of Health Stroke Scale (NIHSS) - 10. Dysartri (bed patienten læse forskellige ord) |
| [NIHSS - 11. Ekstinktion og inattention](ValueSet-NIHSS11EkstinktionInattention.md) | The National Institute of Health Stroke Scale (NIHSS) - 11. Ekstinktion og inattention (tidligere ”neglekt”) (brug visuel eller sensorisk dobbeltsidig stimulation) |
| [NIHSS - 1a. Bevidsthedsniveau](ValueSet-NIHSS1aBevidsthedsniveau.md) | The National Institute of Health Stroke Scale (NIHSS) - 1a. Bevidsthedsniveau |
| [NIHSS - 1b. Bevidsthedsniveau: spørgsmål](ValueSet-NIHSS1bBevidsthedsniveau.md) | The National Institute of Health Stroke Scale (NIHSS) - 1b. Bevidsthedsniveau: spørgsmål |
| [NIHSS - 1c. Bevidsthedsniveau: ordrer](ValueSet-NIHSS1cBevidsthedsniveau.md) | The National Institute of Health Stroke Scale (NIHSS) - 1c. Bevidsthedsniveau: ordrer |
| [NIHSS - 2. Blik](ValueSet-NIHSS2Blik.md) | The National Institute of Health Stroke Scale (NIHSS) - 2. Blik (kun horisontale øjenbevægelser) |
| [NIHSS - 3. Test af synsfelt](ValueSet-NIHSS3Synsfelt.md) | The National Institute of Health Stroke Scale (NIHSS) - 3. Test af synsfelt |
| [NIHSS - 4. Facialisparese](ValueSet-NIHSS4Facialisparese.md) | The National Institute of Health Stroke Scale (NIHSS) - 4. Facialisparese (bed patienten om at vise tænder/løfte øjenbryn og lukke øjnene fast i) |
| [NIHSS - 5. Motorisk funktion i arm](ValueSet-NIHSS5FunktionArm.md) | The National Institute of Health Stroke Scale (NIHSS) - 5. Motorisk funktion i arm |
| [NIHSS - 6. Motorisk funktion i ben](ValueSet-NIHSS6FunktionBen.md) | The National Institute of Health Stroke Scale (NIHSS) - 6. Motorisk funktion i ben |
| [NIHSS - 7. Ekstremitets ataksi](ValueSet-NIHSS7Ataksi.md) | The National Institute of Health Stroke Scale (NIHSS) - 7. Ekstremitets ataksi |
| [NIHSS - 8. Sensibilitet](ValueSet-NIHSS8Sensibilitet.md) | The National Institute of Health Stroke Scale (NIHSS) - 8. Sensibilitet (brug pinprick til at teste arme, ben, trunkus og ansigt - sammenlign side for side) |
| [NIHSS - 9. Sprog](ValueSet-NIHSS9Sprog.md) | The National Institute of Health Stroke Scale (NIHSS) - 9. Sprog (bed patienten beskrive billeder, benævne genstande, læse sætninger) |
| [NYHA klasser - hjertesvigt](ValueSet-NYHA.md) | Udfald for NYHA klasser |
| [Neoadjuverende behandling DCCG](ValueSet-NeoadjuverendeBehandling.md) | Neoadjuverende behandling DCCG |
| [Observation af patienten](ValueSet-ObservationPatient.md) | Observation af patienten indsamlet via |
| [Observation afdeling](ValueSet-ObservationAfdeling.md) | Observation af patienten på egen eller anden afdeling |
| [Observationssted anæstesi](ValueSet-ObservationsstedAN.md) | Observationssted anæstesi |
| [Observationssted postoperativt](ValueSet-ObservationsstedPO.md) | Observationssted for postoperativ anæstesi observation |
| [Onkologibehandlinger (kurativ)](ValueSet-OnkologibehandlingerKurativ.md) | Dette er alle typer af onkologibehandlinger for kurativ behandlingsintention |
| [Onkologibehandlinger - alle](ValueSet-OnkologibehandlingerAll.md) | Dette er alle typer af onkologibehandlinger |
| [Onkologisk behandlingsintention](ValueSet-OnkologiBehandlingsintention.md) | Behandlingsintention for onkologiske forløb |
| [Operation - Danmark/Udlandet (DHR)](ValueSet-OperationDanmarkUdlandetDHR.md) | Operation - Danmark/Udlandet (DHR) |
| [Operation - aktuel (DKRR)](ValueSet-OperationerAktuelDKRR.md) | Operation - aktuel (DKRR) |
| [Operation Ikke Gennemført (DCCG)](ValueSet-OperationIkkeGennemfortDCCG.md) | Operation Ikke Gennemført: Årsag (DCCG) |
| [Operation kanal - antal (DKRR)](ValueSet-OperationKanalAntalDKRR.md) | Operation kanal - antal (DKRR) |
| [Operation kanal - femur, placering (DKRR)](ValueSet-OperationKanalFemurPlaceringDKRR.md) | Operation kanal - femur, placering (DKRR) |
| [Operationer (DKRR)](ValueSet-OperationerDKRR.md) | Operationer (DKRR) |
| [Operationserfaring](ValueSet-Operationserfaring.md) | Operationserfaring for operatører og assistenter |
| [Operationskode - Genital prolaps (DUGA)](ValueSet-OpkodeGenitalProlapsDUGA.md) | Operationskode - Genital prolaps (DUGA) |
| [Operationskode - Urin-inkontinens (DUGA)](ValueSet-OpkodeUrinInkontinensDUGA.md) | Operationskode - Urin-inkontinens (DUGA) |
| [Operationskode - Urin-inkontinens og genital prolaps (DUGA)](ValueSet-OpkodeUrinGenitalDUGA.md) | Operationskode - Urin-inkontinens og genital prolaps (DUGA) |
| [Operationspåklædning [DHR]](ValueSet-OperationspaaklaedningDHR.md) | Operationspåklædning [DHR] |
| [Operationsside (højre/venstre)](ValueSet-Operationsside.md) | Operationsside (højre/venstre) |
| [Operationsside (højre/venstre/centralt) (KAR)](ValueSet-OperationssideKAR.md) | Operationsside (højre/venstre/centralt) (KAR) |
| [Operationsside (højre/venstre/dobbeltsidig)](ValueSet-OperationssideHoejreVenstreDobbeltsidig.md) | Operationsside (højre/venstre/dobbeltsidig) |
| [Operationsstue (DKR)](ValueSet-OperationsstueDKR.md) | Operationsstue (DKR) |
| [Operationsstue (flow/konventionel)](ValueSet-OperationsstueFlowKonventionel.md) | Operationsstue (flow/konventionel) |
| [Operationssår infektion (KAR)](ValueSet-OperationssaarInfektionKAR.md) | Operationssår infektion (KAR) |
| [Operationssår komplikationer (KAR)](ValueSet-OperationssaarKomplikationerKAR.md) | Operationssår komplikationer (KAR) |
| [Operationstype (første gangs/recidiv)](ValueSet-OperationstypeFoersteRecidiv.md) | Operationstype (første gangs/recidiv) |
| [Operationstype (primær/revision)](ValueSet-OperationstypePrimaerRevision.md) | Operationstype (primær/revision) |
| [Operationstype (primær/sekundær)](ValueSet-OperationstypePrimaerSekundaer.md) | Operationstype (primær/sekundær) |
| [Operationstype - kirurgi (LYFO)](ValueSet-OperationstypeLYFO.md) | Operationstype - kirurgi (LYFO) |
| [Operativ Procedurekategori (DCCG)](ValueSet-OperativProcedureKategoriDCCG.md) | Operativ Procedurekategori (DCCG) |
| [Operativ Procedurekategori (Kolon) (DCCG)](ValueSet-OperativProcedureKategoriKolonDCCG.md) | Operativ Procedurekategori (Kolon) (DCCG) |
| [Operativ adgang (DKR)](ValueSet-OperativAdgangDKR.md) | Operativ adgang (DKR) |
| [Operativ procedurekategori (Rektum) (DCCG)](ValueSet-OperativProcedureKategoriRektumDCCG.md) | Operativ procedurekategori (Rektum) (DCCG) |
| [Operative adgang (DHR)](ValueSet-OperativeAdgangDHR.md) | Operative adgang (DHR) |
| [Operativt Sigte DCCG](ValueSet-OperativtSigteDCCG.md) | Operativt Sigte DCCG |
| [Operativt fund - ingvinalhernie (DHDB)](ValueSet-OperativtFundIngvinalhernieDHDB.md) | Operativt fund - ingvinalhernie (DHDB) |
| [Opfølgning 2/5 år](ValueSet-FollowUp25Y.md) | Opfølgning efter 2 eller 5 år |
| [Osteotomi type - Almindelig/Extended (DHR)](ValueSet-OsteotomiTypeAlmindeligExtendedDHR.md) | Osteotomi type - Almindelig/Extended (DHR) |
| [POP-Q undersøgelse Aa+Ap (DUGA)](ValueSet-POPQAaApDUGA.md) | Nedsynkning - POP-Q undersøgelse Aa+Ap (DUGA) |
| [POP-Q undersøgelse Ba (DUGA)](ValueSet-POPQBaDUGA.md) | Nedsynkning - POP-Q undersøgelse Ba (DUGA) |
| [POP-Q undersøgelse Bp (DUGA)](ValueSet-POPQBpDUGA.md) | Nedsynkning - POP-Q undersøgelse Bp (DUGA) |
| [POP-Q undersøgelse C+D (DUGA)](ValueSet-POPQCDDUGA.md) | Nedsynkning - POP-Q undersøgelse C+D (DUGA) |
| [POP-Q undersøgelse Gh (DUGA)](ValueSet-POPQGhDUGA.md) | Nedsynkning - POP-Q undersøgelse Gh (DUGA) |
| [POP-Q undersøgelse Kompartment (DUGA)](ValueSet-POPQKompartmentDUGA.md) | Nedsynkning - POP-Q undersøgelse Kompartment (DUGA) |
| [POP-Q undersøgelse Pb (DUGA)](ValueSet-POPQPbDUGA.md) | Nedsynkning - POP-Q undersøgelse Pb (DUGA) |
| [POP-Q undersøgelse Tvl (DUGA)](ValueSet-POPQTvlDUGA.md) | Nedsynkning - POP-Q undersøgelse Tvl (DUGA) |
| [Paragraffer (RETSPSYK)](ValueSet-ParagrafferRETSPSYK.md) | Paragraffer (RETSPSYK) |
| [Patient respons på behandling (ALD)](ValueSet-TreatmentResponseALD.md) | Hvordan reagerer patienten på behandlingen [ALD] |
| [Patient respons på behandling (DAMYDA)](ValueSet-TreatmentResponseDAMYDA.md) | Hvordan reagerer patienten på behandlingen [DAMYDA] |
| [Patobank SNOMED DMPN Diagnose](ValueSet-PatobankSNOMEDDMPNDiagnose.md) | DMPN diagnoser (Patobank SNOMED) |
| [Patobank SNOMED: pTNM klassifikation, pM](ValueSet-PatobankSNOMEDpTNMpM.md) | SNOMED koderne relevante pM tillægskoder |
| [Patobank SNOMED: pTNM klassifikation, pN](ValueSet-PatobankSNOMEDpTNMpN.md) | SNOMED koderne relevante pN tillægskoder |
| [Patobank SNOMED: pTNM klassifikation, pT](ValueSet-PatobankSNOMEDpTNMpT.md) | SNOMED koderne relevante pT tillægskoder |
| [PatobankSNOMED - Diagnoser (LYFO)](ValueSet-PatobankSNOMEDDiagnoserLYFO.md) | PatobankSNOMED - Diagnoser (LYFO) |
| [PatobankSNOMED koder for cytogenetik - recurrente forandringer (MDS)](ValueSet-PatobankSNOMEDCytogenetikMDS.md) | PatobankSNOMED koder for cytogenetik - recurrente forandringer (MDS) |
| [Perforation (DUGA)](ValueSet-PerforationDUGA.md) | Procedurekode - Perforation (DUGA) |
| [Perioder Måned / Kvartal](ValueSet-PerioderMK.md) | Perioder Måned / Kvartal |
| [Peritonealdefekt lukning (DHDB)](ValueSet-PeritonealdefektLukningDHDB.md) | Peritonealdefekt lukning (DHDB) |
| [Peroperativ metastasebehandling](ValueSet-PeroperativMetastasebehandling.md) | Peroperativ metastasebehandling |
| [Pivot Shift](ValueSet-PivotShift.md) | Pivot Shift |
| [Placering af brusklæsioner (DKRR)](ValueSet-BrusklaesionPlaceringDKRR.md) | Placering af brusklæsioner (DKRR) |
| [Planlagt behandling (DAMYDA)](ValueSet-TreatmentScheduledDAMYDA.md) | Planlagt behandling (DAMYDA) |
| [Planlagt eller iværksat behandling](ValueSet-TreatmentScheduledALD.md) | Planlagt eller iværksat behandling |
| [Plasma Analyse - kræft diagnose](ValueSet-PlasmaDiagnose.md) | Plasma analyse - kræft diagnose kriterier [DAMYDA] |
| [Plasma Analyse - kræft diagnose 202412](ValueSet-PlasmaDiagnose202412.md) | Plasma analyse - kræft diagnose kriterier [DAMYDA] |
| [Plasma M komponent (Myeloma protein) type](ValueSet-MComponentTypeDAMYDA.md) | Plasma M komponent (Myeloma protein) type [DAMYDA] |
| [Polyppens endoskopiske udseende](ValueSet-EndoskopiskUdseende.md) | Polyppens endoskopiske udseende |
| [Position af STEMI hjertestop](ValueSet-HeartAttackSTEMIPosition.md) | En mere detailiert positions beskrivelse af hjertestop |
| [Postoperativ komplikatione](ValueSet-ComplicationPO.md) | Postoperative komplikationer |
| [Postoperative komplikationer (DCCG)](ValueSet-PostoperativeKomplikationerDCCG.md) | Postoperative komplikationer (DCCG) |
| [Preoperativ templating](ValueSet-PreoperativTemplating.md) | Preoperativ templating (DHR) |
| [Primærtumors lokalisation DCCG](ValueSet-TumorLokalisationDCCG.md) | Primærtumors lokalisation DCCG |
| [Priority](ValueSet-Priority.md) | Vurdering af patientens behov |
| [Procedure Ikke Gennemført DCCG](ValueSet-ProcedureIkkeGennemfortDCCG.md) | Procedure Ikke Gennemført DCCG |
| [Procedure varighed; over/under 15 min.](ValueSet-ProcedureVarighed15min.md) | Procedure varighed; over/under 15 min. |
| [Procedure varighed; over/under 5 min.](ValueSet-ProcedureVarighed5min.md) | Procedure varighed; over/under 5 min. |
| [Procedurer, andre (DKRR)](ValueSet-ProcedurerAndreDKRR.md) | Procedurer, andre (DKRR) |
| [Proceduretyper til DCCG 1](ValueSet-ProcedureTypeDCCG1.md) | Proceduretyper til DCCG 1 |
| [Proceduretyper til DCCG 2](ValueSet-ProcedureTypeDCCG2.md) | Proceduretyper til DCCG 2 |
| [Proceduretyper til DCCG 3](ValueSet-ProcedureTypeDCCG3.md) | Proceduretyper til DCCG 3 |
| [Progression CML](ValueSet-ProgressionCML.md) | Progression CML |
| [Protese (DSR)](ValueSet-ProteseDSR.md) | Protese (DSR) |
| [Protese fjernelse (DHR)](ValueSet-ProteseFjernelseDHR.md) | Protese fjernelse (DHR) |
| [Protesestatus (DHR)](ValueSet-ProtesestatusDHR.md) | Protesestatus (DHR) |
| [Præoperativ Metastasebehandling (DCCG)](ValueSet-PraeoperativMetastaseBehandlingDCCG.md) | Præoperativ Metastasebehandling (DCCG) |
| [Præoperativ Udrensning (DCCG)](ValueSet-PraeoperativUdrensningDCCG.md) | Præoperativ Udrensning (DCCG) |
| [Præoperativ lokal stråleterapi ved malign indikation for TES](ValueSet-LokalStraaleterapi.md) | Præoperativ lokal stråleterapi ved malign indikation for TES |
| [Præoperativ planlægning (DSR)](ValueSet-PraeoperativPlanlaegningDSR.md) | Præoperativ planlægning (DSR) |
| [Pupilforhold](ValueSet-Pupilforhold.md) | Forholdet mellem pupillerne |
| [Påvirkning (RETSPSYK)](ValueSet-PaavirkningRETSPSYK.md) | Påvirkning (RETSPSYK) |
| [Påvirkning Pågående (RETSPSYK)](ValueSet-PaavirkningPaagaaendeRETSPSYK.md) | Påvirkning Pågående (RETSPSYK) |
| [Påvisning af vasospasme; metode](ValueSet-VasospasmerPaavisning.md) | Påvisning af vasospasme; metode |
| [R-klassifikation](ValueSet-RKlassifikation.md) | R-klassifikation (Residual tumor) |
| [R-klassifikation til DEGC](ValueSet-RKlassifikationTilDegc.md) | R-klassifikation (Residual tumor) til DEGC |
| [Radioimmunoterapi](ValueSet-Radioimmunoterapi.md) | Radioimmunoterapi |
| [Regioner](ValueSet-Regioner.md) | Danske Regioner |
| [Registrering - Eksklusionsårsag (HAEMA)](ValueSet-RegistreringEksklusionHAEMA.md) | Registrering - Eksklusionsårsag (HAEMA) |
| [Relaksation til intubation](ValueSet-IntubationRelaks.md) | Relaksation til intubation |
| [Relationen til doner](ValueSet-DonorRelationship.md) | Familie relation til donor |
| [Relationen til donor (DNSL)](ValueSet-DonorRelationDNSL.md) | Familie relation til donor (DNSL) |
| [Reoperation årsager (DKRR)](ValueSet-ReoperationAarsagDKRR.md) | Årsager til reoperation indenfor 1 år (DKRR) |
| [Resektionstype](ValueSet-Resektionstype.md) | Resektionstype for kræft databaser (DEGC) |
| [Responsevaluering på behandling (LYFO)](ValueSet-BehandlingsResponsEvalueringLYFO.md) | Responsevaluering på behandling (LYFO) |
| [ResultTest_FISH](ValueSet-ResultTestFISH.md) | Resultat af test (FISH) |
| [Resultat](ValueSet-Result.md) | Resultat Negativ/Positiv |
| [Resultat af FISH](ValueSet-FISHResult.md) | Resultat af FISH |
| [Resultat af FISH 202502](ValueSet-FISHResult202502.md) | Resultat af FISH 202502 - Fjernet udgået udfald og tilføjet nye |
| [Revision (DHR)](ValueSet-RevisionDHR.md) | Revision (DHR) |
| [Revision - Humerus komponent (DSR)](ValueSet-RevisionHumerusKomponentDSR.md) | Revision - Humerus komponent (DSR) |
| [Revision - Humerus/cavitas (DSR)](ValueSet-RevisionHumerusCavitasDSR.md) | Revision - Humerus/cavitas (DSR) |
| [Revision, indikation (DHR)](ValueSet-RevisionIndikationDHR.md) | Revision, indikation (DHR) |
| [Revision, indikation (DKR)](ValueSet-RevisionIndikationDKR.md) | Revision, indikation (DKR) |
| [Revision, indikation (DSR)](ValueSet-RevisionIndikationDSR.md) | Revision, indikation (DSR) |
| [Revision, indikation - Aseptisk løsning (DSR)](ValueSet-RevisionIndikationAseptiskDSR.md) | Revision, indikation - Aseptisk løsning (DSR) |
| [Revision, status (DKR)](ValueSet-RevisionStatusDKR.md) | Revision, status (DKR) |
| [Revision, udskiftning (DHR)](ValueSet-RevisionUdskiftningDHR.md) | Revision, udskiftning (DHR) |
| [Revision, årsag (DKRR)](ValueSet-RevisionAarsagDKRR.md) | Revision, årsag (DKRR) |
| [Revisionstype (DSR)](ValueSet-RevisionstypeDSR.md) | Revisionstype (DSR) |
| [Risikofaktorer DMPN](ValueSet-RisikofaktorerDMPN.md) | Risikofaktorer - DMPN |
| [Risikovurdering (RETSPSYK)](ValueSet-RisikovurderingRETSPSYK.md) | Risikovurdering (RETSPSYK) |
| [Robot (DHDB)](ValueSet-RobotDHDB.md) | Robot assisteret metode (DHDB) |
| [Robot (DKR)](ValueSet-RobotDKR.md) | Robottyper til robot assisteret kirurgi (DKR) |
| [Ryger op til 8 uger](ValueSet-Ryger8uger.md) | Ryger eller ophørt indenfor 8 uger |
| [Rygning](ValueSet-Rygning.md) | Udfald for rygning |
| [Rygning (DCCG)](ValueSet-RygningDCCG.md) | Udfald for rygning |
| [Rytme Defibrilleringsmetode](ValueSet-RytmeDefibrilleringMetode.md) | Metode ved defibrillering af hjerterytme |
| [RytmeAnalyseMetode](ValueSet-RytmeAnalyseMetode.md) | Metode til analyse af hjerterytme |
| [SKS: Anatomisk lokation for ventrikel/esophagus](ValueSet-SKSVentrikelEsophagus.md) | SKS koderne for den anatomiske lokation for ventrikel/esophagus |
| [SKS: Apopleksi diagnoser](ValueSet-SKSApopleksiDiagnoser.md) | SKS koderne relevante Apopleksi databasen (DAP) |
| [SKS: Operationer (KAR)](ValueSet-SKSOperationerKAR.md) | SKS: Operationer (KAR) |
| [SKS: Symptomatisk/Asymptomatisk koder](ValueSet-SKSSymptomatiskAsymptomatisk.md) | SKS koderne for symptomatisk/asymptomatisk |
| [SKS: Udskrivningsiagnoser for Trombolyse (DAP)](ValueSet-SKSUdskrivningsdiagnoserTrombolyse.md) | SKS koderne relevante for Trombolyse (DAP) |
| [SKS: cTNM klassifikation, cM](ValueSet-SKScTNMcM.md) | SKS koderne relevante cM tillægskoder |
| [SKS: cTNM klassifikation, cN](ValueSet-SKScTNMcN.md) | SKS koderne relevante cN tillægskoder |
| [SKS: cTNM klassifikation, cT](ValueSet-SKScTNMcT.md) | SKS koderne relevante cT tillægskoder |
| [SKS: hjertesvigt til DHD](ValueSet-SKShjertesvigtDHD.md) | SKS koder relevante for DHD |
| [SOR: Afdelinger (DNSL)](ValueSet-SORAfdelingerDNSL.md) | SOR: Afdelinger Nyresvigt (DNSL) |
| [SOR: Afdelinger (HÆMA)](ValueSet-SORAfdelingerHaema.md) | SOR: Afdelinger (HÆMA) |
| [SOR: Afdelinger Universitetshospitaler (DNSL)](ValueSet-SORAfdelingerUHDNSL.md) | SOR: Afdelinger Nyresvigt på nniversitetshospitaler (DNSL) |
| [SOR: Neurokirurgiske afdelinger (DAP)](ValueSet-SORNeurokirurgiskeAfdelingerDAP.md) | SOR: Neurokirurgiske afdelinger (DAP) |
| [SOR: Neurologiske afdelinger (DAP)](ValueSet-SORNeurologiskeAfdelingerDAP.md) | SOR: Neurologiske afdelinger (DAP) |
| [SOR: Overflytning (RETSPSYK)](ValueSet-SOROverflytningRETSPSYK.md) | SOR: Overflytning (RETSPSYK) |
| [SOR: Overflytning Hovedstaden (RETSPSYK)](ValueSet-SOROverflytningRETSPSYKHS.md) | SOR: Overflytning Hovedstaden (RETSPSYK) |
| [SOR: Overflytning Midtjylland (RETSPSYK)](ValueSet-SOROverflytningRETSPSYKMJ.md) | SOR: Overflytning Midtjylland (RETSPSYK) |
| [SOR: Overflytning Nordjylland (RETSPSYK)](ValueSet-SOROverflytningRETSPSYKNJ.md) | SOR: Overflytning Nordjylland (RETSPSYK) |
| [SOR: Overflytning Sjælland (RETSPSYK)](ValueSet-SOROverflytningRETSPSYKSJ.md) | SOR: Overflytning Sjælland (RETSPSYK) |
| [SOR: Overflytning Syddanmark (RETSPSYK)](ValueSet-SOROverflytningRETSPSYKSD.md) | SOR: Overflytning Syddanmark (RETSPSYK) |
| [SOR: Trombolyseenhed (DAP)](ValueSet-SORTrombolyseenhedDAP.md) | SOR: Trombolyseenhed (DAP) |
| [SOR: afd_Skema3DUGA (DUGA)](ValueSet-SORafdSkema3Duga.md) | SOR: afd_Skema3DUGA (DUGA) |
| [Scandinavian Stroke Scale - Armløft](ValueSet-SSSArmloeft.md) | Scandinavian Stroke Scale - Armløft |
| [Scandinavian Stroke Scale - Benløft](ValueSet-SSSBenloeft.md) | Scandinavian Stroke Scale - Benløft |
| [Scandinavian Stroke Scale - Bevidsthed](ValueSet-SSSBevidsthed.md) | Scandinavian Stroke Scale - Bevidsthed |
| [Scandinavian Stroke Scale - Facialisparese](ValueSet-SSSFacialisparese.md) | Scandinavian Stroke Scale - Facialisparese |
| [Scandinavian Stroke Scale - Gang](ValueSet-SSSGang.md) | Scandinavian Stroke Scale - Gang |
| [Scandinavian Stroke Scale - Håndtryk](ValueSet-SSSHaandtryk.md) | Scandinavian Stroke Scale - Håndtryk |
| [Scandinavian Stroke Scale - Orientering](ValueSet-SSSOrientering.md) | Scandinavian Stroke Scale - Orientering |
| [Scandinavian Stroke Scale - Tale](ValueSet-SSSTale.md) | Scandinavian Stroke Scale - Tale |
| [Scandinavian Stroke Scale - Øjenmotorik](ValueSet-SSSOejenmotorik.md) | Scandinavian Stroke Scale - Øjenmotorik |
| [Scanningstyper; CT, MR](ValueSet-ScanningstyperCTMR.md) | Scanningstyper; CT, MR |
| [ScoreTyper HOFTER](ValueSet-ScoreTyperHOFTER.md) | Score type brugt ved vurdering af funktionsniveau |
| [Skannings metoder](ValueSet-MedicalScanningTypes.md) | Forskellige skannings metoder |
| [Skannings metoder 202412](ValueSet-MedicalScanningTypes202412.md) | Forskellige skannings metoder |
| [Skematype](ValueSet-Skematype.md) | Indleveringsform for eksterne skemaer |
| [Slynge (DUGA)](ValueSet-SlyngeDUGA.md) | Slynge (DUGA) |
| [Specificer Cytogenetiske Fund](ValueSet-CytogeneticSpecificerFund.md) | Specificer Cytogenetiske Fund |
| [Splenomegali, udvikling og konstatering](ValueSet-Splenomegali.md) | Splenomegali, udvikling og konstatering |
| [Stamcelle type](ValueSet-CytogeneticStemCellType.md) | Hvor kommer stamcellerne fra |
| [Status](ValueSet-Status.md) | Status |
| [Stemkarakteristik (DSR)](ValueSet-StemkarakteristikDSR.md) | Stemkarakteristik (DSR) |
| [Stemlængde (DSR)](ValueSet-StemlaengdeDSR.md) | Stemlængde (DSR) |
| [Stomi type (DHDB)](ValueSet-StomiTypeDHDB.md) | Stomi type (DHDB) |
| [Straffelovsparagraf (RETSPSYK)](ValueSet-StraffelovsparagrafRETSPSYK.md) | Straffelovsparagraf (RETSPSYK) |
| [Strålebehandlingens mål](ValueSet-StraalebehandlingMaal.md) | Alle mål for strålebehandling |
| [Strålebehandlinger mål - alle](ValueSet-StraalebehandlingTAAll.md) | Alle mål for strålebehandling |
| [Stråleterapi (LYFO)](ValueSet-StraaleterapiLYFO.md) | Stråleterapi LYFO (LYFO) |
| [Subscapularis (DSR)](ValueSet-SubscapularisDSR.md) | Subscapularis (DSR) |
| [Supplerende indgreb (DSR)](ValueSet-SupplerendeIndgrebDSR.md) | Supplerende indgreb (DSR) |
| [Suspension (DUGA)](ValueSet-SuspensionDUGA.md) | Procedurekode - Suspension (DUGA) |
| [Sutur materiale, ventralhernie (DHDB)](ValueSet-SuturMaterialeVentralhernieDHDB.md) | Sutur materiale, ventralhernie (DHDB) |
| [Sutur monofilament type, ventralhernie (DHDB)](ValueSet-SuturMonofilamentTypeVentralhernieDHDB.md) | Sutur monofilament type, ventralhernie (DHDB) |
| [Sutur type, ventralhernie (DHDB)](ValueSet-SuturTypeVentralhernieDHDB.md) | Sutur type, ventralhernie (DHDB) |
| [Sutur type; selvlåsende (DHDB)](ValueSet-SuturTypeDHDB.md) | Suturtype; selvlåsende (DHDB) |
| [Suturtype hurtig resorberbar monofilament ventralhernie (DHDB)](ValueSet-SuturHurtigResorberbarMonoDHDB.md) | Suturtype hurtig resorberbar monofilament ventralhernie, ventralhernie (DHDB) |
| [Suturtype hurtig resorberbar multifilament ventralhernie (DHDB)](ValueSet-SuturHurtigResorberbarMultiDHDB.md) | Suturtype hurtig resorberbar multifilament, ventralhernie (DHDB) |
| [Suturtype langsom resorberbar monofilament ventralhernie (DHDB)](ValueSet-SuturLangsomResorberbarMonoDHDB.md) | Suturtype langsom resorberbar monofilament, ventralhernie (DHDB) |
| [Suturtype non-resorberbar monofilament ventralhernie (DHDB)](ValueSet-SuturNonResorberbarMonoDHDB.md) | Suturtype non-resorberbar monofilament, ventralhernie (DHDB) |
| [Suturtype non-resorberbar multifilament ventralhernie (DHDB)](ValueSet-SuturNonResorberbarMultiDHDB.md) | Suturtype non-resorberbar multifilament, ventralhernie (DHDB) |
| [Sygdom; medicinsk behandlet (DHDB)](ValueSet-SygdomMedicinskBehandletDHDB.md) | Sygdom; medicinsk behandlet (DHDB) |
| [Sygdomslokalisation er kun ekstranodalt, kvinder (LYFO)](ValueSet-LocationExtranodalFemale.md) | Sygdomslokalisation i lymfe områder er kun ekstranodalt, og patienten er en kvinde (LYFO) |
| [Sygdomslokalisation er kun ekstranodalt, kvinder (LYFO) version 2](ValueSet-LocationExtranodalFemale-V2.md) | Sygdomslokalisation i lymfe områder er kun ekstranodalt, og patienten er en kvinde (LYFO) |
| [Sygdomslokalisation er kun ekstranodalt, mænd (LYFO)](ValueSet-LocationExtranodalMale.md) | Sygdomslokalisation i lymfe områder er kun ekstranodalt, og patienten er en mand (LYFO) |
| [Sygdomslokalisation er kun ekstranodalt, mænd (LYFO) version 2](ValueSet-LocationExtranodalMale-V2.md) | Sygdomslokalisation i lymfe områder er kun ekstranodalt, og patienten er en mand (LYFO) |
| [Sygdomslokalisation er kun nodalt (LYFO)](ValueSet-LocationNodal.md) | Sygdomslokalisation i lymfe områder er kun nodalt (LYFO) |
| [Sygdomslokalisation er kun nodalt (LYFO) version 2](ValueSet-LocationNodal-V2.md) | Sygdomslokalisation i lymfe områder er kun nodalt (LYFO) |
| [Sygdomslokalisation er prim. nodalt, sek. ekstranodalt eller omv, kvinder (LYFO)](ValueSet-LocationPriSecNodalFemale.md) | Sygdomslokalisation i lymfe områder er primært nodalt, sekundært ekstranodalt eller primært ekstranodalt, sekundært nodalt, og patienten er en kvinde (LYFO) |
| [Sygdomslokalisation er prim. nodalt, sek. ekstranodalt eller omv, mænd (LYFO)](ValueSet-LocationPriSecNodalMale.md) | Sygdomslokalisation i lymfe områder er primært nodalt, sekundært ekstranodalt eller primært ekstranodalt, sekundært nodalt, og patienten er en mand (LYFO) |
| [Sygdomsområder - HÆMA](ValueSet-SygdomsomraaderHaema.md) | Alle Sygdomsområder i KIP vedr. hæmatologi |
| [Sygdomsområder - Ortopædkirurgi](ValueSet-SygdomsomraaderDOF.md) | Alle Sygdomsområder i KIP vedr. ortopædkirurgi |
| [Sygdomsområder - alle](ValueSet-SygdomsomraaderAlle.md) | Alle Sygdomsområder i KIP |
| [Sygdomsudbredelse i lymfe områder](ValueSet-LokationLymphomas.md) | Sygdomsudbredelse i lymfe områder |
| [Symptom skala](ValueSet-Skala.md) | Symptom skala |
| [Symptomer Mikrovaskulære](ValueSet-SymptomerMikrovaskulaer.md) | Typer af mikrovaskulære symptomeromplikationer - DMPN |
| [Tackernavn; Absorberbare tackers (DHDB)](ValueSet-TackernavnAbsorberbarDHDB.md) | Tackernavn; Absorberbare tackers (DHDB) |
| [Tackernavn; Non-absorberbare tackers (DHDB)](ValueSet-TackernavnNonAbsorberbarDHDB.md) | Tackernavn; Non-absorberbare tackers (DHDB) |
| [Tackertype; absorberbar/non-absorberbar (DHDB)](ValueSet-TackertypeDHDB.md) | Tackertype; absorberbar/non-absorberbar (DHDB) |
| [Teammedlemmer på stopholdet](ValueSet-StopTeam.md) | Teammedlemmer/personale på stopholdet |
| [Tidligere indgreb (DSR)](ValueSet-TidligereIndgrebDSR.md) | Tidligere indgreb (DSR) |
| [Tidligere operation (DKR)](ValueSet-TidligereOperationDKR.md) | Tidligere operation (DKR) |
| [Tidligere operation hofte (hoftealloplastik)](ValueSet-TidligereOperationHofte.md) | Tidligere operation hofte (hoftealloplastik) |
| [Tidspunkt for central blokade](ValueSet-CentralBlock.md) | Tidspunkt for central blokade |
| [Tiltag i forbindelse med hydrocephalus](ValueSet-HydrocephalusTiltag.md) | Tiltag i forbindelse med hydrocephalus |
| [Tiltag i forbindelse med vasospasmer](ValueSet-VasospasmerTiltag.md) | Tiltag i forbindelse med vasospasmer |
| [Totaldosis i.v. actilyse er ikke givet; årsag](ValueSet-ActilyseIkkeGivet.md) | Årsagen til hvorfor Totaldosis i.v. actilyse ikke er givet |
| [Transplantation](ValueSet-Transplantation.md) | Er en Transplantation udført |
| [Transplantation - Transplant/Cage/Augment (DHR)](ValueSet-TransplantationCageAugmentDHR.md) | Transplantation - Transplantation/Cage/Augment (DHR) |
| [Transplantation type (DHR)](ValueSet-TransplantationTypeDHR.md) | Transplantation type (DHR) |
| [Transplantation uden svarmuligheden Ingen transplantation](ValueSet-Transplantation1.md) | Er en Transplantation udført |
| [Transplantationcenterliste til ALG](ValueSet-TransplantationcenterALG.md) | Transplantationcenterliste til ALG |
| [Transplantationstype (CML)](ValueSet-TransplantationstypeCML.md) | Transplantationstype (CML) |
| [Treatment_Indication_CLL](ValueSet-TreatmentIndicationCLL.md) | Indikation for kemoterapi/behandling - CLL |
| [Treatment_Response_Evaluation_CLL](ValueSet-TreatmentResponseEvaluationCLL.md) | Indikation for kemoterapi/behandling - CLL |
| [Treatment_Response_Evaluation_LYFO](ValueSet-TreatmentResponseEvaluationLYFO.md) | Indikation for kemoterapi/behandling - LYFO |
| [Trombektomi-Perfusion (Danstroke)](ValueSet-TrombektomiPerfusion.md) | Perfusion opnået under trombektomi |
| [Trombolyseprofylakse (DHR)](ValueSet-TrombolyseprofylakseDHR.md) | Trombolyseprofylakse (DHR) |
| [Trombolysepræparater](ValueSet-Trombolysepraeparater.md) | Danstroke Trombolysepræparater |
| [Tumorklassifikation](ValueSet-TumorklassifikationBehandlingDEGC.md) | Histologisk tumorklassifikation i DEGC (behandling) |
| [Tumorklassifikation](ValueSet-TumorklassifikationDiagnoseDEGC.md) | Histologisk tumorklassifikation i DEGC (diagnose) |
| [Tumorklassifikation [DEGC]](ValueSet-TumorklassifikationDEGC.md) | Histologisk tumorklassifikation i [DEGC] |
| [Type af indgreb (akut/elektiv)](ValueSet-IndgrebPrioritetAkutElektiv.md) | Type af indgreb (akut/elektiv) |
| [Type af præoperativ endoskopisk lokalresektion (Kolon) DCCG](ValueSet-TypeLokalresektionKolonDCCG.md) | Type af præoperativ endoskopisk lokalresektion (Kolon) DCCG |
| [Type af præoperativ endoskopisk lokalresektion (Rektum) DCCG](ValueSet-TypeLokalresektionRektumDCCG.md) | Type af præoperativ endoskopisk lokalresektion (Rektum) DCCG |
| [Type af præoperativ endoskopisk lokalresektion DCCG](ValueSet-TypeLokalresektionDCCG.md) | Type af præoperativ endoskopisk lokalresektion DCCG |
| [Typer af blokade overekstremiteter](ValueSet-NerveBlockTypeUpper.md) | Typer af perifer nerveblokade - overekstremiteter |
| [Typer af blokade underekstremiteter](ValueSet-NerveBlockTypeLower.md) | Typer af perifer nerveblokade - underekstremiteter |
| [Typer af blokade øvrige](ValueSet-NerveBlockTypeOther.md) | Type Perifer nerveblokade Trunkal/Abdominal/Øvrige |
| [Typer af central blokade](ValueSet-CentralBlockType.md) | Typer af central blokade |
| [U-M komponent type](ValueSet-UMComponentTypeDAMYDA.md) | U-M komponent type [DAMYDA] |
| [Uddybning af hvor patienten er henvist til fysisk træning](ValueSet-ReferredForTraining.md) | Uddybning af hvor patienten er henvist til fysisk træning |
| [Udførelse af resektion DCCG](ValueSet-ResektionUdfoerelseDCCG.md) | Udførelse af resektion DCCG |
| [UdførendendeLAB](ValueSet-UdfoerendeLAB.md) | UdførendeLAB |
| [Udført procedure (DCCG)](ValueSet-ProcedureUdfoertDCCG.md) | Udført procedure (DCCG) |
| [Udført procedure K1 (DCCG)](ValueSet-ProcedureUdfoertK1DCCG.md) | Udført procedure K1 (DCCG) |
| [Udført procedure K2 (DCCG)](ValueSet-ProcedureUdfoertK2DCCG.md) | Udført procedure K2 (DCCG) |
| [Udført procedure K3 (DCCG)](ValueSet-ProcedureUdfoertK3DCCG.md) | Udført procedure K3 (DCCG) |
| [Udført procedure R1 (DCCG)](ValueSet-ProcedureUdfoertR1DCCG.md) | Udført procedure R1 (DCCG) |
| [Udført procedure R2 (DCCG)](ValueSet-ProcedureUdfoertR2DCCG.md) | Udført procedure R2 (DCCG) |
| [Udført procedure R3 (DCCG)](ValueSet-ProcedureUdfoertR3DCCG.md) | Udført procedure R3 (DCCG) |
| [Udført procedure R4 (DCCG)](ValueSet-ProcedureUdfoertR4DCCG.md) | Udført procedure R4 (DCCG) |
| [Udredning (DANDEM)](ValueSet-UdredningDANDEM.md) | Udredning (DANDEM) |
| [Udredning (DANDEM) 2025](ValueSet-UdredningDANDEM2025.md) | Udredning (DANDEM) - Fjernet to udfald og omformuleret no_wish_for_assessment. Erstatter et tidligere VS. |
| [Udredning - Klinisk/genetisk](ValueSet-UdredningKliniskGenetisk.md) | Udredning - Klinisk/genetisk |
| [Udskrevet til](ValueSet-UdskrevetTil.md) | Udskrevet til |
| [Undersøgelsestype (DUGA)](ValueSet-UndersoegelsesTypeDUGA.md) | Undersøgelsestype (DUGA) |
| [UndersøgendeLAB](ValueSet-UndersoendeLAB.md) | UndersøgendeLAB |
| [Undervisningstype](ValueSet-Undervisning.md) | Undervisningstype |
| [Uoplyst (enkelt udfald)](ValueSet-Uoplyst.md) | Giver mulighed for at svare ukendt/ukendt |
| [Urin lækker (DUGA)](ValueSet-UrniLaekDUGA.md) | Hvornår lækker urin (DUGA) |
| [Uspecificeret (enkelt udfald)](ValueSet-Uspecificeret.md) | Uspecificeret (enkelt udfald) |
| [Vancouver klassifikation (DHR)](ValueSet-VancouverKlassifikationDHR.md) | Vancouver klassifikation (DHR) |
| [Vancouver klassifikation - Peroperativ (DHR)](ValueSet-VancouverKlassifikationPeroperativDHR.md) | Vancouver klassifikation - Peroperativ (DHR) |
| [VarigRespons](ValueSet-VarigRespons.md) | VarigRespons |
| [Varighed (DKR)](ValueSet-VarighedDKR.md) | Varighed (DKR) |
| [Varighed PostOP trombolyseprofylakse (DKR)](ValueSet-VarighedPostOPTrombDKR.md) | Planlagt varighed Postoperativ trombolyseprofylakse (DKR) |
| [Varighed PostOP trombolyseprofylakse (DKR) VitK_anta](ValueSet-VarighedPostOPTrombDKRVitKanta.md) | Planlagt varighed Postoperativ trombolyseprofylakse (DKR)VitK_anta |
| [Varighed PostOP trombolyseprofylakse (DKR)1](ValueSet-VarighedPostOPTrombDKR1.md) | Planlagt varighed Postoperativ trombolyseprofylakse (DKR)1 |
| [Varighed PostOP trombolyseprofylakse (DKR)2](ValueSet-VarighedPostOPTrombDKR2.md) | Planlagt varighed Postoperativ trombolyseprofylakse (DKR)2 |
| [Varighed PostOP trombolyseprofylakse (DKR)3](ValueSet-VarighedPostOPTrombDKR3.md) | Planlagt varighed Postoperativ trombolyseprofylakse (DKR)3 |
| [Varighed PostOP trombolyseprofylakse (DKR)NOAK](ValueSet-VarighedPostOPTrombDKRNOAK.md) | Planlagt varighed Postoperativ trombolyseprofylakse (DKR) NOAK |
| [Ved fund af ICH, skal der evkaueres eller ej](ValueSet-ICHEvakuering.md) | Ved fund af intracerebralt hæmatom (ICH), skal der evkaueres eller ej |
| [Vedligeholdelsesbehandling](ValueSet-TreatmentPreservation.md) | Hvilken vedligeholdelsesbehandling er der påbegyndt |
| [Ventral hernie cicatrice type (DHDB)](ValueSet-VentralHernieCicatriceTypeDHDB.md) | Ventral hernie cicatrice type (DHDB) |
| [Ventral hernie type (DHDB)](ValueSet-VentralHernieTypeDHDB.md) | Ventral hernie type (DHDB) |
| [Visitationskriterier uopfyldt](ValueSet-ManglendeVisitation.md) | Hvilke visitationskriterier var ikke opfyldt |
| [WFSN grad](ValueSet-WFNSGradering.md) | World Federation of Neurosurgical Societies (WFNS) grad. |
| [WHO Performance status grad 1-4](ValueSet-WHOPerformanceStatus04.md) | WHO Performance status grad 1-4 |
| [WOOS - Armløft (DSR)](ValueSet-WOOSArmloeftDSR.md) | WOOS - Armløft (DSR) |
| [WOOS - Hænder (DSR)](ValueSet-WOOSHaenderDSR.md) | WOOS - Hænder (DSR) |
| [WOOS - Træning (DSR)](ValueSet-WOOSTraeningDSR.md) | WOOS - Træning (DSR) |
| [Walch klassifikation (DSR)](ValueSet-WalchKlassifikationDSR.md) | Walch klassifikation (DSR) |
| [mTICI reperfusionsgrad](ValueSet-MTICIReperfusionsgrad.md) | Reperfusionsgrad ved brug af Modified treatment in cerebral ischemia (mTICI). |
| [pTNM type](ValueSet-PTNMtype.md) | Typen af pTNM klassifikationen |
| [Årsag til anden/aflastende procedure colorectal cancer](ValueSet-AarsagTilProcedureDCCG.md) | Årsag til anden/aflastende procedure colorectal cancer |
| [Årsag til ophør (DNSL)](ValueSet-AarsagOphoerDNSL.md) | Årsager til interventionsforløb er ophørt |
| [Årsag til ændret behandlingsplan DCCG](ValueSet-BehandlinsplanAendretAarsagDCCG.md) | Årsag til ændret behandlingsplan DCCG |

### Terminology: Code Systems 

These define new code systems used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [AK Behandling (DKR)](CodeSystem-AKBehandling.md) | AK Behandling (DKR) |
| [ASA Physical Status Classification System](CodeSystem-ASAClassification.md) | Score udviklet til vurdering af det fysiske helbred. Link: https://www.asahq.org/standards-and-guidelines/asa-physical-status-classification-system |
| [Action upon discovery of ICH](CodeSystem-ICHAction.md) | Action upon discovery of ICH (Intracerebral haematoma) |
| [Activity type](CodeSystem-ActivityType.md) | Activity type |
| [Aktuel Sygdomsforløb](CodeSystem-AktuelSygdomsforlob.md) | Er patienten i det aktuelle sygdomsforløb |
| [Alchohol](CodeSystem-Alchohol.md) | Healthfactor alchohol |
| [Alchohol or drugs](CodeSystem-AlchoholDrugs.md) | Alchohol or drugs |
| [Alloplasty operation types](CodeSystem-AlloplastyTypes.md) | Alloplasty operation types |
| [Anastomosis leak](CodeSystem-AnastomosisLeak.md) | Anastomosis Leak |
| [Anastomosis leak consequence](CodeSystem-AnastomosisLeakConsequence.md) | Anastomosis leak consequence |
| [Anastomosis leak grading](CodeSystem-AnastomosisLeakGrading.md) | Anastomosis leak grading |
| [Anastomosis type](CodeSystem-AnastomosisType.md) | Anastomosis type |
| [Anatomy locations, not specified in classifcations (SKS, etc.)](CodeSystem-AnatomicalLocations.md) | Anatomy locations, not specified in classifcations (SKS, etc.) |
| [Aneurysm closure](CodeSystem-AneurysmClosure.md) | Aneurysm closure - Degree of closure |
| [Aneurysm size scale (SAH)](CodeSystem-AneurysmSizeScale.md) | Aneurysm size scale (SAH) |
| [Ann Arbor staging system](CodeSystem-AnnArborStagingClassification.md) | Ann Arbor staging system; Link: https://radiopaedia.org/articles/ann-arbor-staging-system |
| [Anæstesi Type Generel](CodeSystem-AnasthesiaTypeGen.md) | Generel Anæstesiydelse - Tillæg |
| [Anæstesiydelse](CodeSystem-AnasthesiaService.md) | Anæstesiydelse |
| [Assessment type](CodeSystem-AssessmentType.md) | Assessment type |
| [Assist devices](CodeSystem-AssistDevices.md) | Assist devices |
| [Banff Classifikation](CodeSystem-BANFF.md) | Banff Classifikation |
| [Basic disorder](CodeSystem-BasicDisorder.md) | Basic disorder |
| [Behandling afbrudt/ophørt](CodeSystem-BehandlingAfbrudt.md) | Årsager til behandling eller forløb er afbrudt/ophørt |
| [Binet staging system for Chroniz Lymphocytic Leukemia](CodeSystem-BinetStagingSystem.md) | Stages chronic lymphocytic leukemia, similar to Rai Staging System. *Nodal areas: cervical, axillary, inguinal (one side or both), spleen, and liver. Link: https://www.mdcalc.com/calc/10053/binet-staging-system-chronic-lymphocytic-leukemia-cll |
| [Birthplace](CodeSystem-Birthplace.md) | Birthplace |
| [Bleeding - Stroke](CodeSystem-BleedingStroke.md) | Bleeding - Stroke |
| [Bone loss - Acetabulum Femur Classification](CodeSystem-BoneLossAcetabulumFemurClassification.md) | Walch classification; Link: https://radiopaedia.org/articles/walch-classification-of-glenoid-morphology-1 |
| [Bulking materiale - Urogynækologi (DUGA)](CodeSystem-BulkingMaterialeDUGA.md) | Bulking materiale - Urogynækologi (DUGA) |
| [CALR gene type](CodeSystem-CALRGeneType.md) | CALR gene type |
| [Calcium type](CodeSystem-CalciumType.md) | Calcium type |
| [Cancer investigation](CodeSystem-CancerInvestigation.md) | Udredning for cancerpatienter for cancerpatienter. |
| [Cause of death](CodeSystem-CauseOfDeath.md) | Cause of death |
| [Cause of reoperation](CodeSystem-ReoperationCause.md) | Cause of reoperation |
| [Cement type](CodeSystem-CementType.md) | Cement type |
| [Central blokade](CodeSystem-CentralBlock.md) | Tidspunkt for central blokade |
| [Chemotherapy regimen](CodeSystem-ChemotherapyRegimen.md) | Chemotherapy regimen |
| [Chromosom pair](CodeSystem-ChromosomPair.md) | Chromosom pair |
| [Clinical protocol - patient did not participated; cause](CodeSystem-ClinicalProtocolNotParticipated.md) | Clinical protocol - patient did not participated; cause |
| [Clinical protocol; name](CodeSystem-ClinicalProtocolCodes.md) | Clinical protocol; name |
| [Cognitive function finding](CodeSystem-CognitiveFunctionFinding.md) | Cognitive function finding / SNOMED-CT: 373930000 |
| [Cognitive test](CodeSystem-CognitiveTest.md) | Cognitive test |
| [Complications](CodeSystem-Complications.md) | Complications - several procedures |
| [Conference Participants](CodeSystem-ConferenceParticipants.md) | Deltagende faggrupper |
| [Contact; Place of contact](CodeSystem-ContactPlace.md) | Contact; Place of contact |
| [Contamination degree](CodeSystem-ContaminationDegree.md) | Contamination degree |
| [Current treatment (if any) of medical blood thinners](CodeSystem-BloodThinnersTreatment.md) | Current treatment (if any) of medical blood thinners |
| [Cyclus](CodeSystem-Cyclus.md) | Cyclus længde |
| [Cytogenetic changes](CodeSystem-CytogeneticChanges.md) | Cytogenetic changes |
| [Cytogenetic examination](CodeSystem-CytogeneticExamination.md) | Examination; cytogenetic examination |
| [DHD eksklusionskriterier](CodeSystem-DHDeksklusionskriterie.md) | Patienten skal ikke indberettes til DHD, fordi patienten opfylder et af følgende eksklusionskriterier. |
| [Danish National Biobank - Samples/materials](CodeSystem-BiobankSamples.md) | Danish National Biobank - Samples/materials |
| [Databaser - KIP](CodeSystem-DatabasesKIP.md) | Databaser i KIP |
| [Defibrillering_Analyse](CodeSystem-DefibrilleringAnalyse.md) | Metode til analyse/defibrillering af hjerterytme |
| [Den Danske SNOMED for Patologi](CodeSystem-PatobankSNOMED.md) | Den Danske SNOMED for Patologi - Udvalgte koder i RKKP. Link: https://www.patobank.dk/snomed/ |
| [Detection methods](CodeSystem-DetectionMethods.md) | Detection methods (vasospasms etc.) |
| [Dialyseadgang](CodeSystem-Dialyseadgang.md) | Dialyseadgang |
| [Disease localization](CodeSystem-DiseaseLocalization.md) | Disease localization |
| [Disease phase](CodeSystem-DiseasePhase.md) | Disease phase |
| [Diseases - Unspecified without a code](CodeSystem-DiseasesUnspecified.md) | Diseases - Unspecified without a code |
| [Dosis](CodeSystem-Dosis.md) | Dosis i givne mængder |
| [EDTA koder (DNSL)](CodeSystem-EDTACodes.md) | EDTA koder (DNSL) |
| [EHS - Incisional hernia classification](CodeSystem-EHSIncisionalHerniaClassification.md) | EHS (European Hernia Society) - Incisional hernia classification; Link: https://www.ncbi.nlm.nih.gov/pmc/articles/PMC2719726/ |
| [EHS - Incisional hernia classification type](CodeSystem-EHSIncisionalHerniaClassificationType.md) | EHS (European Hernia Society) - Incisional hernia classification type |
| [EORTC QLQ-C15-PAL 1-4](CodeSystem-EORTCQLQC1514.md) | EORTC Palliativ spørgeskema (1-15) grad 1-4. Se https://www.eortc.org/research_field/quality-of-life/ |
| [EORTC QLQ-C15-PAL G1-7](CodeSystem-EORTCQLQC1517.md) | EORTC Palliativ spørgeskema (1-15) grad 1-7. Se https://www.eortc.org/research_field/quality-of-life/ |
| [ERA PRD Codes](CodeSystem-PRDcodes.md) | European Renal Association (ERA) Primary Renal Disease (PRD) |
| [Economic support](CodeSystem-EconomicSupport.md) | Economic support |
| [Edema (brain) - Stroke](CodeSystem-EdemaStroke.md) | Edema (brain) - Stroke |
| [Education Type](CodeSystem-EducationType.md) | Education Type |
| [Endoscopic appearance](CodeSystem-EndoscopicAppearance.md) | Endoscopic appearance |
| [FISH variables; test](CodeSystem-FISHVariables.md) | FISH variables; test |
| [Faggruppe](CodeSystem-Faggruppe.md) | Faggruppe involveret i hændelser |
| [Fagligt niveau](CodeSystem-Competence.md) | Udførende personales faglighed |
| [Findings with digital subtraction angiography (DSA); location of clot](CodeSystem-DSAFindingsLocation.md) | Findings with digital subtraction angiography (DSA); location of clot |
| [Fisher grading scale](CodeSystem-FisherGradingScale.md) | Fisher grading scale; Link: https://radiopaedia.org/articles/fisher-scale |
| [Fixation for cruciate ligaments (femur and tibia); types of screws](CodeSystem-FixationCruciateLigaments.md) | Fixation for cruciate ligaments (femur and tibia), types of screws |
| [Frekvens](CodeSystem-Frekvens.md) | Frekvens for hvor ofte en given hændelse optræder |
| [Function group (alloplasty)](CodeSystem-FunctionGroupAlloplasty.md) | Function group (alloplasty) |
| [Function test](CodeSystem-FunctionTest.md) | Function test |
| [FunctionalScoreTypes](CodeSystem-FunctionalScoreTypes.md) | Anvendte typer ved måling af helbreds- eller funktionel score |
| [General size scale](CodeSystem-SizesGeneral.md) | General size scale |
| [Generic values](CodeSystem-GenericValues.md) | Generic values for a multitude of questions. This is meant as an extension to several codesystems, where codes from below might appear. |
| [Genoplivning](CodeSystem-Genoplivning.md) | Aktivitet ifm genoplivning |
| [Genoplivning indstillet - årsag](CodeSystem-GenoplivStoppet.md) | Årsager til indstilling af genoplivningsforsøg |
| [Grafts for cruciate ligaments; types of grafts](CodeSystem-GraftCruciateLigaments.md) | Grafts for cruciate ligaments, types of grafts |
| [Gynækologisk undersøgelsesmetode (DUGA)](CodeSystem-GynUndersoegDUGA.md) | Gynækologisk undersøgelsesmetode (DUGA) |
| [HGBTransfusion4](CodeSystem-HaemoglobinTransf4.md) | Hæmoglobinværdi før blodtransfusion |
| [Harris Hip Score (HHS) - Activities - shoes, socks](CodeSystem-HarrisHipScoreShoesSocks.md) | Harris Hip Score (HHS) - Activities - shoes socks. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html |
| [Harris Hip Score (HHS) - Distance walked](CodeSystem-HarrisHipScoreDistanceWalked.md) | Harris Hip Score (HHS) - Distance walked. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html |
| [Harris Hip Score (HHS) - Limp](CodeSystem-HarrisHipScoreLimp.md) | Harris Hip Score (HHS) - Limp. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html |
| [Harris Hip Score (HHS) - Pain](CodeSystem-HarrisHipScorePain.md) | Harris Hip Score (HHS) - Pain. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html |
| [Harris Hip Score (HHS) - Public transportation](CodeSystem-HarrisHipScorePublicTransportation.md) | Harris Hip Score (HHS) - Public transportation. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html |
| [Harris Hip Score (HHS) - Sitting](CodeSystem-HarrisHipScoreSitting.md) | Harris Hip Score (HHS) - Sitting. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html |
| [Harris Hip Score (HHS) - Stairs](CodeSystem-HarrisHipScoreStairs.md) | Harris Hip Score (HHS) - Stairs. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html |
| [Harris Hip Score (HHS) - Support](CodeSystem-HarrisHipScoreSupport.md) | Harris Hip Score (HHS) - Support. Link: https://www.orthopaedicscore.com/scorepages/harris_hip_score.html |
| [Hernia size](CodeSystem-HerniaSize.md) | Hernia size |
| [Hip joint arthroplasty - components](CodeSystem-HipJointArthroplastyComponent.md) | Hip joint arthroplasty - components |
| [Histologisk klassifikation (fordøjelsessystemet)](CodeSystem-TumorClassificationHistology.md) | Tumor klassificeres histologisk jvf. WHO Classification of Tumours of the Digestive System. Link: https://dccg.dk/wp-content/uploads/2017/08/Tumorklassifikation.pdf |
| [Hjerterytme](CodeSystem-HeartRhythm.md) | Patientens hjerterytme |
| [Hjerterytme - første obs](CodeSystem-Rytme1Obs.md) | Første observerede hjerterytme |
| [HjerterytmeAnalyse](CodeSystem-HjerterytmeAnalyse.md) | Analyse af hjerterytme |
| [Hjertestop Årsag](CodeSystem-HjertestopAarsag.md) | Årsag til hjertestop |
| [Housing type](CodeSystem-HousingType.md) | Housing type |
| [Hunt and Hess scale](CodeSystem-HuntHessClassification.md) | Hunt and Hess scale; Link: https://radiopaedia.org/articles/hunt-and-hess-grading-system |
| [Hændelse indtræffer](CodeSystem-HaendelseIndtraeffer.md) | I hvilken sammenhæng sker en given hændelse |
| [ICRS grading system](CodeSystem-ICRSGradingSystem.md) | ICRS grading system; Link: https://www.researchgate.net/figure/The-International-Cartilage-Repair-Society-ICRS-Cartilage-Lesion-Classification-System_fig2_224847959 |
| [IPSS-R - Cytogenetic Category](CodeSystem-IPSSRCytogeneticCategory.md) | IPSS-R - Cytogenetic Category. Link: https://www.hematology.dk/index.php/vejledninger/udregnere/330-ipss-r |
| [Ikke besvaret](CodeSystem-IkkeBesvaret.md) | Årsager til ikke-besvaret spørgsmål |
| [Implant components](CodeSystem-ImplantComponents.md) | Implant components |
| [Implantattype - Urogynækologi (DUGA)](CodeSystem-ImplantattypeDUGA.md) | Implantattype - Urogynækologi (DUGA) |
| [Incision choice](CodeSystem-IncisionChoice.md) | Incisionsvalg eller operativ adgang |
| [Intervaller eksakte værdier](CodeSystem-IntervalsExact.md) | Intervaller med varierende eksakte værdier |
| [Intervals](CodeSystem-Intervals.md) | Intervals. Generic intervals. |
| [Interventionsforløb](CodeSystem-Interventionsforloeb.md) | Interventionsforløb |
| [Interventionsgruppe](CodeSystem-Interventionsgruppe.md) | Interventionsgruppe (DNSL) |
| [Intubation](CodeSystem-Intubation.md) | Resultat af luftvejshåndtering vha. intubation |
| [KAG risk assesment](CodeSystem-CoronaryArteryGraph.md) | Should the patient get a KAG |
| [Kellgren-Lawrence Klassifikation](CodeSystem-KellgrenLawrenceKlassifikation.md) | Kellgren-Lawrence Klassifikation |
| [Kliniske symptomer (DCCG)](CodeSystem-KliniskeSymptomerDCCG.md) | Kliniske symptomer (DCCG) |
| [Knee joint arthroplasty - components](CodeSystem-KneeJointArthroplastyComponent.md) | Knee joint arthroplasty - components |
| [Knee looseness grading](CodeSystem-KneeLoosenessGrading.md) | Knee looseness grading |
| [Kontakt til patient](CodeSystem-ContactPatient.md) | Kontakttype til patient - Undersøgelse, interview, mv. |
| [Korsbånd ikke bevaret](CodeSystem-KorsbaandEjBevaret.md) | Korsbånd ikke bevaret efter operation |
| [Laryngoskopi grad](CodeSystem-LaryngoskopiDegree.md) | Bedst opnåede laryngoskopigrad ved direkte laryngoskopi efter Cormack & Lehane |
| [Lesion type](CodeSystem-LesionType.md) | Lesion type |
| [Liner komponent](CodeSystem-KomponentLiner.md) | Liner komponenter med/uden post |
| [Liv Status](CodeSystem-LifeStatus.md) | Patientens status ved udskrivelse |
| [Lokalization esophagus cancer](CodeSystem-EsophagealLokalization.md) | Lokalization esophagus cancer |
| [M component (Myeloma protein) type](CodeSystem-MComponentType.md) | M component (Myeloma protein) type |
| [Marital status / Living with others](CodeSystem-MaritalStatus.md) | Marital status / Living with others |
| [Measurement devices](CodeSystem-MeasurementDevices.md) | Measurement devices |
| [Medical fixation and closing](CodeSystem-MedicalFixationClosing.md) | Medical fixation and closing |
| [Medical scanning types](CodeSystem-MedicalScanningTypes.md) | Medical scanning types |
| [Medical treatment duration](CodeSystem-MedicalTreatmentDuration.md) | Medical treatment duration |
| [Medical treatment: Medication administration](CodeSystem-MedicalTreatmentAdministrationType.md) | Medical treatment: Medication administration |
| [Medical treatment: when did the treatment begin](CodeSystem-MedicalTreatmentStartOf.md) | Medical treatment: when did the treatment begin compared to operation/procedure |
| [Medication name](CodeSystem-MedicationName.md) | Medication name |
| [Medicin givet ved hjertestop](CodeSystem-MedicinDANARREST.md) | Mediciin givet ved behandling i DANARREST specialet |
| [Medicine](CodeSystem-Medicine.md) | Medicine |
| [Mental declaration](CodeSystem-MentalDeclaration.md) | Mental declaration |
| [Mesh placement](CodeSystem-MeshPlacement.md) | Mesh placement |
| [Mesh technique](CodeSystem-MeshTechnique.md) | Mesh technique |
| [Mesh type](CodeSystem-MeshType.md) | Mesh type |
| [Modified treatment in cerebral ischemia (mTICI) score](CodeSystem-MTICIClassification.md) | Modified treatment in cerebral ischemia (mTICI) score; Link: https://radiopaedia.org/articles/modified-treatment-in-cerebral-ischaemia-mtici-score |
| [Molecular remission (MR)](CodeSystem-MolecularRemission.md) | Molecular remission (MR) |
| [Mors Diagnosegrupper (DNSL)](CodeSystem-MorsDiagnosegrupper.md) | Mors Diagnosegrupper (DNSL) |
| [Mors Diagnosekoder (DNSL)](CodeSystem-MorsDiagnosekoder.md) | Mors Diagnosekoder (DNSL) |
| [Mulig-Vanskelig-Umulig](CodeSystem-MuligVanskeligUmulig.md) | Vurdering af behandling |
| [Måleenheder](CodeSystem-MaaleEnheder.md) | Enheder til dokumentation af mængde, vægt, længde mm. |
| [Mængde](CodeSystem-Maengde.md) | Angivelse af mængder |
| [NYHA klasser - hjertesvigt](CodeSystem-NYHA.md) | The New York Heart Association (NYHA) Functional Classification link:https://www.heart.org/en/health-topics/heart-failure/what-is-heart-failure/classes-of-heart-failure |
| [Observationssted](CodeSystem-Observationssted.md) | Sted hvor anæstesien observeres |
| [Oncology Treatment (curative)](CodeSystem-OncologyTreatmentCurative.md) | Types of oncology treatments for curative treatment intention |
| [Onkologibehandlinger](CodeSystem-Onkologibehandling.md) | Typer af onkologibehandlinger |
| [Operating room, attributes](CodeSystem-OperatingRoom.md) | Operating room, attributes |
| [Operation canal](CodeSystem-OperationCanal.md) | Operation canal |
| [Operation type](CodeSystem-OperationType.md) | Operation type (primary, revision, extirpation) |
| [Operationserfaring](CodeSystem-Operationserfaring.md) | Operationserfaring for operatører og assistenter |
| [Opfølgning - intervaller](CodeSystem-FollowUp.md) | Opfølgningsperiode, dage, uger, måneder, år |
| [Paragraph](CodeSystem-Paragraph.md) | Paragraph |
| [Performance Status score (ECOG/WHO/Zubrod)](CodeSystem-PerformanceStatusScore.md) | Score udviklet til performance for cancerpatienter. Kaldes både ECOG, WHO eller Zubrod. Link: https://ecog-acrin.org/resources/ecog-performance-status/ |
| [Perioder](CodeSystem-Periods.md) | Kalendermæssige perioder |
| [Person relation; relation to another person](CodeSystem-PersonFamilyRelation.md) | Person relation; relation to another person |
| [Pivot Shift grading](CodeSystem-PivotShiftGrading.md) | Pivot Shift grading |
| [Place of death](CodeSystem-DeathPlace.md) | Place of death |
| [Placering af indikationsgivne artrose](CodeSystem-ArtrosePlacering.md) | Placering af indikationsgivne artrose |
| [Plan for eller støtte til luftvejsassistance](CodeSystem-Respiration.md) | Mulige indgreb vedr luftvejsstøtte |
| [Preoperativ templating](CodeSystem-PreoperativTemplating.md) | Preoperativ templating |
| [Prioritering](CodeSystem-Priority.md) | Patientens prioriteringsbehov |
| [Procedure duration: Codes for different durations](CodeSystem-ProcedureDuration.md) | Procedure duration: Codes for different durations |
| [Procedure not completed; cause](CodeSystem-ProcedureNotCompleted.md) | Procedure not completed; cause |
| [Procedure type: Codes for different durations](CodeSystem-ProcedureType.md) | Procedure type: Codes for different durations |
| [Procedurekoder - Urogynækologi (DUGA)](CodeSystem-ProcedureUrogyn.md) | Procedurekoder - Urogynækolog (DUGA) |
| [Profylaksebehandling](CodeSystem-Profylaksebehandling.md) | Profylaksebehandling |
| [Prosthesis](CodeSystem-Prosthesis.md) | Prosthesis |
| [Pupil condition](CodeSystem-PupilCondition.md) | Pupil condition |
| [Radiation therapy type](CodeSystem-RadiationTherapyType.md) | Radiation therapy type |
| [Radiological bone changes - Indication of changes in bones](CodeSystem-RadiologicalBoneChanges.md) | Radiological bone changes - Indication of changes in bones |
| [Raymond-Roy occlusion Classification (RROC), incl. modified classification (MRRC)](CodeSystem-RaymondRoyClassification.md) | Raymond-Roy occlusion Classification (RROC), incl. modified classification (MRRC); Link: https://radiopaedia.org/articles/raymondroy-occlusion-classification-of-intracranial-aneurysms-1 |
| [Reasons for MDT-decision not followed](CodeSystem-MDTNotFollowed.md) | Årsagen til hvorfor MDT-beslutning (Multidisciplinære Teamkonferencer) ikke er fuldt |
| [Reasons for not giving anticoagulation therapy](CodeSystem-ACTherapyNotGiven.md) | Årsagen til hvorfor man har fravalgt antikoagulationsbehandling. |
| [Reasons for not giving total dose of actilyse](CodeSystem-ActilyseNotGiven.md) | Årsagen til hvorfor man ikke har givet totaldosis i.v. actilyse. |
| [Reasons for procedure](CodeSystem-ProcedureReasons.md) | Reasons for procedure |
| [Referred from](CodeSystem-ReferredFrom.md) | Referred from |
| [Regioner](CodeSystem-Regioner.md) | Danske regioner |
| [Registry - Unspecified codes](CodeSystem-Registry.md) | Registry - Unspecified codes |
| [Relaksation til intubation](CodeSystem-IntubationRelaks.md) | Relaksation til intubation |
| [Resection completion; justification](CodeSystem-ResectionCompletion.md) | Resection completion; justification |
| [Resection type](CodeSystem-ResectionType.md) | Resektionstype for kræft databaser (DEGC) |
| [Residual Tumor Grading](CodeSystem-ResidualTumorGrading.md) | Gradering hvis der er registreret resttumor i histologisk klassifikation |
| [Residual tumor (R) classification](CodeSystem-ResidualTumorClassification.md) | Residual tumor (R) classification. Link: https://acsjournals.onlinelibrary.wiley.com/doi/10.1002/cncr.10492 |
| [Result of test](CodeSystem-ResultTest.md) | Result of test (for FISH, etc.) |
| [Revision; cause](CodeSystem-RevisionCause.md) | Revision; cause |
| [Revision; indication](CodeSystem-RevisionIndication.md) | Revision; indication |
| [Revision; type](CodeSystem-RevisionType.md) | Revision; type |
| [Risk assessment](CodeSystem-RiskAssessment.md) | Risk assessment |
| [Risk factors](CodeSystem-RiskFactors.md) | Risk factors |
| [Robot (DKR)](CodeSystem-RobotAssistDKR.md) | Robottyper til robot assisteret kirurgi (DKR) |
| [SNOMED-CT](CodeSystem-SNOMEDCT.md) | SNOMED-CT - Codes used in databases. Link: https://browser.ihtsdotools.org/ |
| [Scandinavian Stroke Scale (SSS) - Arm lift](CodeSystem-SSSArmLift.md) | Scandinavian Stroke Scale (SSS) - Arm lift: Vurderes på begge arme, men der noteres kun i forhold til siden for en eventuel lammelse |
| [Scandinavian Stroke Scale (SSS) - Consciousness](CodeSystem-SSSConsciousness.md) | Scandinavian Stroke Scale (SSS) - Consciousness: Svækket bevidsthed kan være udtryk for komplikationer som eksempelvis blødning eller ødem |
| [Scandinavian Stroke Scale (SSS) - Eye motor skills](CodeSystem-SSSEyeMotorSkills.md) | Scandinavian Stroke Scale (SSS) - Eye motor skills: Øjendeviation er ligeledes et dårligt prognostisk tegn. |
| [Scandinavian Stroke Scale (SSS) - Facial paresis](CodeSystem-SSSFacialParesis.md) | Scandinavian Stroke Scale (SSS) - Facial paresis: Kun en sikker facialisparese giver 0. Hvis man er i tvivl gives 2. |
| [Scandinavian Stroke Scale (SSS) - Handshake](CodeSystem-SSSHandshake.md) | Scandinavian Stroke Scale (SSS) - Handshake: Vurderes på begge hænder, men der noteres kun i forhold til siden af en eventuel lammelse |
| [Scandinavian Stroke Scale (SSS) - Leg lift](CodeSystem-SSSLegLift.md) | Scandinavian Stroke Scale (SSS) - Leg lift: Vurderes på begge ben, men der noteres kun i forhold til siden for en eventuel lammelse |
| [Scandinavian Stroke Scale (SSS) - Orientation](CodeSystem-SSSOrientation.md) | Scandinavian Stroke Scale (SSS) - Orientation: Der spørges, om hvilken måned det er, hvilket hospital patienten er på, og patientens CPR-nr. |
| [Scandinavian Stroke Scale (SSS) - Speech](CodeSystem-SSSSpeech.md) | Scandinavian Stroke Scale (SSS) - Speech: Talebesvær på grund af dysartri scorer 10. Kun hvis man er sikker på, at der er sproglige forstyrrelser scores 6, 3 eller 0. |
| [Scandinavian Stroke Scale (SSS) - Walk](CodeSystem-SSSWalk.md) | Scandinavian Stroke Scale (SSS) - Walk: Hvis patienten ikke kan gå, bedømmes om patienten kan sidde oprejst på sengekanten uden at støtte hænderne (3) eller ikke (0). |
| [Score ved central blokade](CodeSystem-ScoreCentralBlock.md) | Regional score ved anlæg af central nerveblokade |
| [Slynge - Urogynækologi (DUGA)](CodeSystem-SlyngeDUGA.md) | Slynge - Urogynækologi (DUGA) |
| [Smerter og kvalme](CodeSystem-SmerteKvalme.md) | Smerter og kvalme målt i forskellige situationer |
| [Smoking](CodeSystem-Smoking.md) | Healthfactor smoking |
| [Specifikation of where the paitent is referred to for physical training](CodeSystem-ReferredForTraining.md) | Uddybning af hvor patienten er henvist til fysisk træning |
| [Stem cell type](CodeSystem-StemCellType.md) | Stem cell type |
| [Strålebehandling mål](CodeSystem-StraalebehandlingTA.md) | Mål for strålebehandling |
| [Sundhedsvæsenets Organisationsregister (SOR)](CodeSystem-SOR.md) | Sundhedsvæsenets OrganisationsregisterR (SOR) - Udvalgte koder i RKKP. |
| [Sundhedsvæsenets klassifikationssystem (SKS)](CodeSystem-SKS.md) | Sundhedsvæsenets klassifikationssystem (SKS) - Udvalgte koder i RKKP. Link: urn:oid:1.2.208.176.2.4 |
| [Sundhedsvæsenets klassifikationssystem (SKS) - Samlinger af koder](CodeSystem-SKSCodeCollection.md) | Sundhedsvæsenets klassifikationssystem (SKS) - Udvalgte samlinger af koder i RKKP. Link: urn:oid:1.2.208.176.2.4 |
| [Surgical attire, during operations](CodeSystem-SurgicalAttire.md) | Surgical attire, during operations |
| [Sygdomsområder](CodeSystem-Sygdomsomraader.md) | Sygdomsområder i KIP |
| [Symptoms](CodeSystem-Symptoms.md) | Symptoms |
| [Systemiske præperater](CodeSystem-SystemiskPraeparat.md) | Dette er systemiske præperater |
| [Target of the radiation therapy](CodeSystem-RadiationTherapyTarget.md) | Target of the radiation therapy |
| [Teammedlemmer på stopholdet](CodeSystem-StopTeam.md) | Teammedlemmer/personale på stopholdet |
| [The National Institute of Health Stroke Scale (NIHSS) - 10. Dysarthria](CodeSystem-NIHSS10Dysarthria.md) | The National Institute of Health Stroke Scale (NIHSS) - 10. Dysarthria; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information |
| [The National Institute of Health Stroke Scale (NIHSS) - 11. Extinction and Inattention (formerly Neglect)](CodeSystem-NIHSS11ExtinctionInattention.md) | The National Institute of Health Stroke Scale (NIHSS) - 11. Extinction and Inattention (formerly Neglect); Link: https://www.ninds.nih.gov/stroke-scales-and-related-information |
| [The National Institute of Health Stroke Scale (NIHSS) - 1a. Level of Consciousness](CodeSystem-NIHSS1aLOC.md) | The National Institute of Health Stroke Scale (NIHSS) - 1a. Level of Consciousness; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information |
| [The National Institute of Health Stroke Scale (NIHSS) - 1b. Level of Consciousness: Questions](CodeSystem-NIHSS1bLOC.md) | The National Institute of Health Stroke Scale (NIHSS) - 1b. Level of Consciousness: Questions; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information |
| [The National Institute of Health Stroke Scale (NIHSS) - 1c. Level of Consciousness: Commands](CodeSystem-NIHSS1cLOC.md) | The National Institute of Health Stroke Scale (NIHSS) - 1c. Level of Consciousness: Commands; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information |
| [The National Institute of Health Stroke Scale (NIHSS) - 2. Best Gaze](CodeSystem-NIHSS2Gaze.md) | The National Institute of Health Stroke Scale (NIHSS) - 2. Best Gaze; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information |
| [The National Institute of Health Stroke Scale (NIHSS) - 3. Visual](CodeSystem-NIHSS3Visual.md) | The National Institute of Health Stroke Scale (NIHSS) - 3. Visual; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information |
| [The National Institute of Health Stroke Scale (NIHSS) - 4. Facial Palsy](CodeSystem-NIHSS4FacialPalsy.md) | The National Institute of Health Stroke Scale (NIHSS) - 4. Facial Palsy; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information |
| [The National Institute of Health Stroke Scale (NIHSS) - 5. Motor Arm](CodeSystem-NIHSS5MotorArm.md) | The National Institute of Health Stroke Scale (NIHSS) - 5. Motor Arm; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information |
| [The National Institute of Health Stroke Scale (NIHSS) - 6. Motor Leg](CodeSystem-NIHSS6MotorLeg.md) | The National Institute of Health Stroke Scale (NIHSS) - 6. Motor Leg; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information |
| [The National Institute of Health Stroke Scale (NIHSS) - 7. Limb Ataxia](CodeSystem-NIHSS7LimbAtaxia.md) | The National Institute of Health Stroke Scale (NIHSS) - 7. Limb Ataxia; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information |
| [The National Institute of Health Stroke Scale (NIHSS) - 8. Sensory](CodeSystem-NIHSS8Sensory.md) | The National Institute of Health Stroke Scale (NIHSS) - 8. Sensory; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information |
| [The National Institute of Health Stroke Scale (NIHSS) - 9. Best Language](CodeSystem-NIHSS9Language.md) | The National Institute of Health Stroke Scale (NIHSS) - 9. Best Language; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information |
| [Treatment cause - unplanned](CodeSystem-TreatmentCause.md) | Treatment cause - unplanned |
| [Treatment indication](CodeSystem-TreatmentIndication.md) | Treatment indication |
| [Treatment initiatives](CodeSystem-TreatmentInitiatives.md) | Treatment initiatives |
| [Treatment lesion](CodeSystem-TreatmentLesion.md) | Treatment lesion |
| [Treatment method - Minimal Residual Disease (MRD)](CodeSystem-TreatmentMethodMRD.md) | Treatment method - Minimal Residual Disease (MRD) |
| [Treatment not given; cause](CodeSystem-TreatmentNotGiven.md) | Treatment not given; cause |
| [Treatment psychopharmacological](CodeSystem-TreatmentPsychopharmacological.md) | Treatment psychopharmacological |
| [Treatment regimen](CodeSystem-TreatmentRegimen.md) | Treatment regimen |
| [Treatment response evaluation](CodeSystem-TreatmentResponseEvaluation.md) | Treatment response evaluation |
| [Treatment schedule](CodeSystem-TreatmentSchedule.md) | Treatment schedule |
| [Treatment sufficient](CodeSystem-TreatmentSufficient.md) | Treatment sufficient |
| [Treatment type](CodeSystem-TreatmentType.md) | Treatment type |
| [Treatment unspecified](CodeSystem-TreatmentUnspecified.md) | Treatment unspecified |
| [TreatmentIntention](CodeSystem-TreatmentIntention.md) | Behandlingsintention for kræft databaserne |
| [Trombektomi-Perfusion (Danstroke)](CodeSystem-TrombektomiPerfusion.md) | Perfusion opnået under trombektomi |
| [Type af pTNM](CodeSystem-PTNMType.md) | Type af pTNM |
| [Typer af blokader](CodeSystem-BlockTypes.md) | Blokader - Central, Underekstremitet, Overekstremitet |
| [Udskrevet til](CodeSystem-UdskrevetTil.md) | Udskrevet til |
| [Undersøgelsestype (DUGA)](CodeSystem-UndersoegelsesTypeDUGA.md) | Undersøgelsestype (DUGA) |
| [Vancouver classification of periprosthetic hip fractures](CodeSystem-VancouverClassification.md) | Vancouver classification of periprosthetic hip fractures; Link: https://radiopaedia.org/articles/vancouver-classification-of-periprosthetic-hip-fractures |
| [Verdict](CodeSystem-Verdict.md) | Verdict |
| [Visitation criteria not met; cause](CodeSystem-VisitationCriteriaNotMet.md) | Visitation criteria not met; cause |
| [WFNS grading system](CodeSystem-WFNSGradingSystem.md) | World Federation of Neurosurgical Societies (WFNS) grading system; Link: https://radiopaedia.org/articles/wfns-grading-system |
| [WHO ATC](CodeSystem-ATC.md) | WHO ATC code system. Link: http://www.whocc.no/atc |
| [WHO ATC; Mixed codes](CodeSystem-ATCMixedCodes.md) | WHO ATC code system; Mixed codes. Link: http://www.whocc.no/atc |
| [WOOS](CodeSystem-WOOS.md) | WOOS |
| [Walch classification](CodeSystem-WalchClassification.md) | Walch classification; Link: https://radiopaedia.org/articles/walch-classification-of-glenoid-morphology-1 |

